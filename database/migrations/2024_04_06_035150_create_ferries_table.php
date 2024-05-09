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
        Schema::create('ferries', function (Blueprint $table) {
            $table->id();
            $table->string('namaAgen');
            $table->string('namaKapal');
            $table->time('berangkat');
            $table->time('sampai');
            $table->string('kelas');
            $table->string('asal');
            $table->string('tujuan');
            $table->string('pelAsal');
            $table->string('pelTuj');
            $table->date('tanggal');
            $table->integer('harga');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ferries');
    }
};
