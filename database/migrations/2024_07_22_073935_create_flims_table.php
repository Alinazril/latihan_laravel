<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('flims', function (Blueprint $table) {
            $table->id();
            $table->string('judul')->unique();
            $table->string('slug');
            $table->string('foto');
            $table->text('deskripsi');
            $table->string('url_video');
            $table->unsignedBigInteger('id_kategori');
            $table->foreign('id_kategori')->references('id')->on('kategoris')
            ->onDelete('cascade');
            $table->timestamps();
        });

        schema::create('genre_flim', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_genre');
            $table->unsignedBigInteger('id_flim');

            $table->foreign('id_genre')->references('id')->on('genres')
            ->onDelete('cascade');
            $table->foreign('id_flim')->references('id')->on('flims')
            ->onDelete('cascade');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('flims');
        Schema::dropIfExists('genre_flims');
        Schema::dropIfExists('aktor_flims');
    }
};
