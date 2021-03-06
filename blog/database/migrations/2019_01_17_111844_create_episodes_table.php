<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEpisodesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('episodes', function (Blueprint $table) {

            $table->increments('id');
            $table->integer('episode_number');
            $table->string('title');

            $table->string('release_date')->nullable();

            $table->integer('season_id')->unsigned();
            $table->foreign('season_id')->references('id')->on('seasons'); //clé étrangere
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
        Schema::dropIfExists('episodes');
    }
}
