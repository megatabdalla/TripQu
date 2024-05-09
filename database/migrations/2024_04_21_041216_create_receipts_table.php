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
        Schema::create('receipts', function (Blueprint $table) {
            $table->id();
            $table->foreignId('ferryID');
            $table->string('name');
            $table->string('surname');
            $table->string('nik');
            $table->string('email');
            $table->string('buktitf')->nullable;
            $table->timestamps();

            $table->foreign('ferryID')->references('id')->on('ferries');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('receipts');
    }
};
