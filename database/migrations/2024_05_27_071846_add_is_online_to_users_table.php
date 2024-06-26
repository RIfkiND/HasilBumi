<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
// In the migration file
public function up()
{
    Schema::table('users', function (Blueprint $table) {
        $table->boolean('is_online')->default(false)->nullable();
        $table->timestamp('last_active')->nullable();
    });
}

public function down()
{
    Schema::table('users', function (Blueprint $table) {
        $table->dropColumn('is_online');
        $table->dropColumn('last_active');
    });
}

};
