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
        $params = [
            'transaction_details' => [
                'order_id' => $this->order->id,
                'gross_amount' => $this->order->grand_total,
            ],
            'customer_details' => [
                'first_name' => $this->order->first_name,
                'last_name' => $this->order->last_name,
                'email' => $this->order->email,
                'phone' => $this->order->mobile,
            ]
        ];

        $snapToken = Snap::getSnapToken($params);

        return $snapToken;
    }
}