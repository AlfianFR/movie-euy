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
        Schema::create('movies', function (Blueprint $table) {
            $table->id();
            $table->string('judul');
            $table->string('sinopsis');
            $table->string('background');
            $table->string('cover');
            $table->integer('durasi');
            $table->bigInteger('id_tahun_rilis')->unsigned();
            $table->bigInteger('id_genre')->unsigned();

            // relasi
            // fk id_tahun_rilis
            $table->foreign('id_tahun_rilis')->references('id')
                ->on('tahun_rilis');
            $table->foreign('id_genre')->references('id')
                ->on('genre_films');

            $table->timestamps();
        });

        Schema::create('casting_movie', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('id_casting')->unsigned();
            $table->bigInteger('id_movie')->unsigned();

            $table->foreign('id_casting')->references('id')
                ->on('castings')->onDelete('cascade');
            $table->foreign('id_movie')->references('id')
                ->on('movies')->onDelete('cascade');

        });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('movies');
        Schema::dropIfExists('casting_movie');

    }
};
