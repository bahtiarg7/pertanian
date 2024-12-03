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
        Schema::create('berita', function (Blueprint $table) {
            $table->id();
            $table->string('judul');
            $table->string('slug');
            $table->unsignedBigInteger('berita_kategori_id');
            $table->foreign('berita_kategori_id')->references('id')->on('berita_kategori')->onDelete('cascade');
            $table->text('deskripsi');
            $table->string('image')->nullable();
            $table->enum('status', ['publish', 'unpublish'])->default('publish');
            $table->enum('slider', ['Y', 'N'])->default('N');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('berita');
    }
};
