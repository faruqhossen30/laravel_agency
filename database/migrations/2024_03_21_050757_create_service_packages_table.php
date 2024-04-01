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
        Schema::create('service_packages', function (Blueprint $table) {
            $table->id();
            $table->foreignId('service_id')->constrained('services')->onDelete('cascade');
            $table->string('starter_price');
            $table->string('starter_deliver_time');
            $table->string('starter_short_description',500);
            $table->string('starter_full_description',1000);
            $table->string('starter_url')->nullable();
            $table->string('standard_price');
            $table->string('standard_deliver_time');
            $table->string('standard_short_description',500);
            $table->string('standard_full_description',1000);
            $table->string('standard_url')->nullable();
            $table->string('advance_price');
            $table->string('advance_deliver_time');
            $table->string('advance_short_description',500);
            $table->string('advance_full_description',1000);
            $table->string('advance_url')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('service_packages');
    }
};
