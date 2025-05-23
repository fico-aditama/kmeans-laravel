<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('penduduks', function (Blueprint $table) {
            $table->id();
            $table->string('nik')->unique();
            $table->string('nama');
            $table->string('alamat')->nullable();
            $table->string('tahun');
            $table->string('periode');
            $table->string('kps');
            $table->string('status_perkawinan');
            $table->string('umur');
            $table->string('jumlah_tanggungan');
            $table->string('pekerjaan')->nullable();
            $table->string('penghasilan')->nullable();
            $table->string('status_kepemilikan_rumah')->nullable();
            $table->string('luas_bangunan')->nullable();
            $table->string('kondisi_rumah')->nullable();
            $table->string('jaringan_listrik')->nullable();
            $table->string('sumber_air')->nullable();
            $table->string('kepemilikan_kendaraan')->nullable();
            $table->timestamps();
        });
    }    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('penduduks');
    }
};
