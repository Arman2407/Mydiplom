<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSeatsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('seats', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('hall_id')->unsigned()->default(0);
            $table->smallInteger('number')->default(1);
            $table->smallInteger('row_number')->default(1);
            $table->boolean('is_vip')->default(false);
            $table->timestamps();
            $table->foreign('hall_id')->references('id')->on('halls')->onDelete('cascade');//->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('seats');
    }
}
