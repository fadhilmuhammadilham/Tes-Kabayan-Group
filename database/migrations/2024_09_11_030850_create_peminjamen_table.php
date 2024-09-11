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
        Schema::create('peminjaman', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('dvd_id')->unsigned();
            $table->integer('jumlah_pinjam');
            $table->string('peminjam', 100);
            $table->string('alamat', 100);
            $table->integer('kontak');
            $table->string('lama_pinjam', 100);
            $table->date('tanggal_pinjam');
            $table->string('metode_pembayaran', 100);
            $table->timestamps();

            $table->foreign('dvd_id')->references('id')->on('dvds')->onUpdate('cascade')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('peminjamen');
    }
};
