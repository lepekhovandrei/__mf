<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFilmsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('films', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('title');
            $table->text('poster_path')->nullable();
            $table->string('genre')->nullable();
            $table->string('id_tmdb_film')->nullable();
            $table->string('original_language')->nullable();
            $table->string('original_title')->nullable();
            $table->text('overview')->nullable();
            $table->string('release_date')->nullable();
            $table->string('vote_average')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('films');
    }
}
