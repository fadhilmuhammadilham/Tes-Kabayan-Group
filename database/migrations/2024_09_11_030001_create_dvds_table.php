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
        Schema::create('dvds', function (Blueprint $table) {
            $table->increments('id');
            $table->string('kode_dvd', 100)->unique();
            $table->string('judul_film', 100);
            $table->string('genre', 100);
            $table->integer('stok');
            $table->integer('harga_sewa');
            $table->string('bahasa', 100);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('dvds');
    }
};
