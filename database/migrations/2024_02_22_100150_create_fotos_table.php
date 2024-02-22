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
        Schema::create('fotos', function (Blueprint $table) {
            $table->id('fotoId');
            $table->string('judulFoto');
            $table->text('dekripsiFoto');
            $table->date('tanggalUnggah');
            $table->string('lokasiFile');
            $table->unsignedBigInteger('albumId');
            $table->unsignedBigInteger('userId');
            $table->timestamps();

            $table->foreign('albumId')->references('albumId')->on('albums')->onDelete('cascade');
            $table->foreign('userId')->references('userId')->on('users')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('fotos');
    }
};
