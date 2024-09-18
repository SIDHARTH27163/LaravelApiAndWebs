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
        Schema::create('tourist_places', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('location_id'); // Make sure this column exists
            $table->enum('status', ['active', 'inactive'])->default('inactive');
            $table->string('category');
            $table->string('title');
            $table->text('about');
            $table->timestamps();
            // Optional: Add foreign key constraint if you have a `locations` table
            $table->foreign('location_id')->references('id')->on('locations')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('touristplaces');
    }
};
