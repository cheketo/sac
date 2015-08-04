<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOfficesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('offices', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id')->unsigned();
            $table->string('address');
            $table->integer('status_id')->unsigned();
            $table->timestamps();

            $table->foreign('user_id')->references('id')->on('users')
                    ->onUpdate('CASCADE')
                    ->onDelete('NO ACTION');

            $table->foreign('status_id')->references('id')->on('status')
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
        Schema::drop('offices');
    }
}
