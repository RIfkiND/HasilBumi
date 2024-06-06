<?php

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
        Schema::table('users', function (Blueprint $table) {
            $table->string('avatar_user')->nullable();
            $table->string('alamat')->nullable()->default('-');
            $table->string('tgl_lahir')->nullable()->default('-');
            $table->string('jenis_kelamin')->default('-')->nullable();
            $table->string('no_hp')->nullable()->default('-');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('users', function (Blueprint $table) {
            //
        });
    }
};
