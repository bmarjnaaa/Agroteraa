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
        Schema::create('news', function (Blueprint $table) {
            $table->id();
            $table->string('title'); // Judul berita
            $table->text('content'); // Deskripsi singkat
            $table->string('tag'); // Tag kategori (misalnya "Artikel")
            $table->date('date'); // Tanggal berita
            $table->string('image')->nullable(); // Gambar berita
            $table->string('link')->nullable(); // Link eksternal (untuk "Baca selengkapnya")
            $table->boolean('is_featured')->default(false); // Tambahkan ini untuk berita unggulan
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('news');
    }
};
