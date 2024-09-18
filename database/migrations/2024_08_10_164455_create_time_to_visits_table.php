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
        Schema::create('time_to_visits', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('tourist_place_id');
            $table->text('time_to_visit');

            $table->foreign('tourist_place_id')->references('id')->on('tourist_places')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('time_to_visits');
    }
};
