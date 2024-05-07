<?php

use App\Models\Seller;
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
            $table->foreignIdFor(Seller::class);
            $table->string('no_hp');
            $table->string('nama_toko');
            $table->string('nip');
            $table->string('kota');
            $table->string('provinsi');
            $table->string('kode_pos');
            $table->string('foto_toko')->nullable();
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
