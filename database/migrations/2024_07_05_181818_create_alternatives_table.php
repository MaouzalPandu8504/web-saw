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
        Schema::create('alternative', function (Blueprint $table) {
            $table -> id();
            $table -> string('nama');
            $table -> integer('luas_bangunan');
            $table -> integer('jumlah_penerangan');
            $table -> integer('pendapatan');
            $table -> integer('jumlah_anggota_keluarga');
            $table -> dateTime('created_at');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('alternatives');
    }
};
