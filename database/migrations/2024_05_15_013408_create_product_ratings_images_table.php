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
        Schema::create('product_ratings_images', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(ProductRating::class)->constrained()->cascadeOnUpdate()->cascadeOnDelete();
            $table->string('url');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('product_ratings_images');
    }
};
