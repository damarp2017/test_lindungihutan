<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFilmTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('film', function (Blueprint $table) {
            $table->string('kd_film', 100)->primary();
            $table->string('nm_film', 100);
            $table->string('genre', 55);
            $table->string('artis', 55);
            $table->string('produser', 55);
            $table->integer('pendapatan');
            $table->integer('nominasi');
            $table->foreign('genre')->references('kd_genre')->on('genre');
            $table->foreign('artis')->references('kd_artis')->on('artis');
            $table->foreign('produser')->references('kd_produser')->on('produser');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('film');
    }
}
