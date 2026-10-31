<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('last_reads', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->unique()->constrained('users')->cascadeOnDelete();
            // surah_id memakai unsignedTinyInteger agar cocok dengan tipe surahs.id
            $table->unsignedTinyInteger('surah_id');
            $table->foreignId('ayah_id')->nullable()->constrained('ayahs')->nullOnDelete();
            $table->timestamps();

            $table->foreign('surah_id')->references('id')->on('surahs')->cascadeOnDelete();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('last_reads');
    }
};

