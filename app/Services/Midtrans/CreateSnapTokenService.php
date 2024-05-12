<?php

namespace App\Services\Midtrans;

use Midtrans;
use Midtrans\Snap;
use Illuminate\Support\Facades\Auth;
Use App\Models\User;
class CreateSnapTokenService extends Midtrans
{
	protected $order;

	public function __construct($order)
	{
		parent::__construct();

		$this->order = $order;
	}

	public function getSnapToken()
	{
        $userName = Auth::user()->name;
        $userEmail = Auth::user()->email;
        $userPhnoeNumber = 
		$params = [
			/**
			 * 'order_id' => id order unik yang akan digunakan sebagai "primary key" oleh Midtrans untuk
			 * 				 membedakan order satu dengan order lain. Key ini harus unik (tidak boleh ada duplikat).
			 * 'gross_amount' => merupakan total harga yang harus dibayar customer.
			 */
			'transaction_details' => [
				'order_id' => $this->order->number,
				'gross_amount' => $this->order->total_price,
			],
			/**
			 * 'item_details' bisa diisi dengan detail item dalam order.
			 * Umumnya, data ini diambil dari tabel `order_items`.
			 */
			'item_details' => [
				[
					'id' => 1, // primary key produk
					'price' => '150000', // harga satuan produk
					'quantity' => 1, // kuantitas pembelian
					'name' => 'Flashdisk Toshiba 32GB', // nama produk
				],
				[
					'id' => 2,
					'price' => '60000',
					'quantity' => 2,
					'name' => 'Memory Card VGEN 4GB',
				],
			],
			'customer_details' => [
				'first_name' => $userName,
				'email' => $userEmail,
				'phone' => '081234567890',
			]
		];

		$snapToken = Snap::getSnapToken($params);

		return $snapToken;
	}
}