<?php

use App\Models\Seller;
use App\Models\User;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('seller_information', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(User::class);
            $table->string('nama_lengkap');
            $table->string('nama_toko');
            $table->string('no_telp_toko');
            $table->string('photo_toko')->nullable();
            $table->string('kota');
            $table->string('provinsi');
            $table->integer('kode_pos');
            $table->string('foto_ktp');
            $table->string('foto_sendiri');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('seller__information');
    }
};
