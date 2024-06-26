<?php

use App\Models\ProductRating;
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
        Schema::create('image_ratings', function (Blueprint $table) {
            $table->id();
            $table->string('url')->nullable();
            $table->foreignIdFor(ProductRating::class)->constrained();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('image_ratings');
    }
};
