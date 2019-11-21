<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSeancesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('seances', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('hall_id')->unsigned()->default(0);
            $table->bigInteger('movie_id')->unsigned()->default(0);
            $table->dateTime('start_time')->nullable();
            $table->timestamps();
            $table->foreign('hall_id')->references('id')->on('halls')->onDelete('cascade');//->onUpdate('cascade');
            $table->foreign('movie_id')->references('id')->on('movies')->onDelete('cascade');//->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('seances');
    }
}
