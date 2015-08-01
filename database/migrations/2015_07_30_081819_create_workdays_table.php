<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateWorkdaysTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('workdays', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('office_id')->unsigned();
            $table->tinyInteger('day_id')->unsigned();
            $table->dateTime('start_time');
            $table->dateTime('end_time');
            $table->timestamps();


            $table->foreign('office_id')->references('id')->on('offices')
                    ->onUpdate('CASCADE')
                    ->onDelete('NO ACTION');

            $table->foreign('day_id')->references('id')->on('days')
                    ->onUpdate('CASCADE')
                    ->onDelete('NO ACTION');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('workdays');
    }
}
