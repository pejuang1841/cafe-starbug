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
        Schema::create('pesanan', function (Blueprint $table) {
            $table->id('id_pesanan');
            $table->integer('id_pegawai');
            $table->integer('id_pelanggan');
            $table->integer('no_telepon');
            $table->integer('id_menu');
            $table->integer('jumlah_pesanan');
            $table->integer('total_pembayaran');
            $table->string('metode_pembayaran', 255);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pesanan');
    }
};
