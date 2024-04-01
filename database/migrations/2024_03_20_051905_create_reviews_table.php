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
        Schema::create('reviews', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->double('rating');
            $table->timestamp('date');
            $table->string('thumbnail')->nullable();
            $table->longText('review')->nullable();
            $table->unsignedBigInteger('review_type_id');
            $table->unsignedBigInteger('category_id');
            $table->string('review_url')->nullable();
            $table->unsignedBigInteger('user_id');
            $table->boolean('status')->default(false);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('reviews');
    }
};
