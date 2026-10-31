<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('surahs', function (Blueprint $table) {
            // id tidak auto-increment karena merepresentasikan nomor urut surah (1..114)
            $table->unsignedTinyInteger('id')->primary();
            $table->string('nama_arab', 50);
            $table->string('nama_latin', 60);
            $table->string('arti', 100);
            $table->unsignedSmallInteger('jumlah_ayat');
            $table->enum('tempat_turun', ['mekah', 'madinah']);
            $table->text('deskripsi')->nullable();
            $table->string('audio_url', 255)->nullable();
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('surahs');
    }
};

