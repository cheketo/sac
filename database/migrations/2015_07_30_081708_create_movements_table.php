<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMovementsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if(Schema::hasTable('movements_type') && Schema::hasTable('users') && Schema::hasTable('movements')){
                Schema::table('movements', function (Blueprint $table) {
                $table->increments('id');
                $table->integer('user_id')->unsigned();
                $table->integer('creator_id')->unsigned();
                $table->integer('type_id')->unsigned();
                $table->decimal('amount',10,2);
                $table->string('concept',255);
                $table->timestamps();

                $table->foreign('user_id')->references('id')->on('users')
                        ->onUpdate('CASCADE')
                        ->onDelete('NO ACTION');

                $table->foreign('type_id')->references('id')->on('movements_type')
                        ->onUpdate('CASCADE')
                        ->onDelete('NO ACTION');
            });
        }else{
            Schema::create('movements', function (Blueprint $table) {
                $table->increments('id');
                $table->integer('user_id')->unsigned();
                $table->integer('creator_id')->unsigned();
                $table->integer('type_id')->unsigned();
                $table->decimal('amount',10,2);
                $table->string('concept',255);
                $table->timestamps();
            });
        }
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('movements');
    }
}
