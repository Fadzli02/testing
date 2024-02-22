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
        Schema::create('komentarfotos', function (Blueprint $table) {
            $table->id('komentarId');
            $table->unsignedBigInteger('fotoId');
            $table->unsignedBigInteger('userId');
            $table->text('isiKomentar');
            $table->date('tanggalKomentar');
            $table->timestamps();

            $table->foreign('fotoId')->references('fotoId')->on('fotos')->onDelete('cascade');
            $table->foreign('userId')->references('userId')->on('users')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('komentarfotos');
    }
};
