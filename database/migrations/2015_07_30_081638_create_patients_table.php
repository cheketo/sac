<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePatientsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if(Schema::hasTable('status') && Schema::hasTable('users') && Schema::hasTable('patients')){
                Schema::table('patients', function (Blueprint $table) {

                    $table->increments('id')->change();
                    $table->integer('user_id')->unsigned()->change();
                    $table->string('first_name',255)->change();
                    $table->string('last_name',255)->change();
                    $table->string('email')->change();
                    $table->string('phone',100)->change();
                    $table->integer('status_id')->unsigned()->change();
                    $table->timestamps()->change();

                    $table->foreign('user_id')->references('id')->on('users')
                            ->onUpdate('CASCADE')
                            ->onDelete('NO ACTION');

                    $table->foreign('status_id')->references('id')->on('status')
                            ->onUpdate('CASCADE')
                            ->onDelete('NO ACTION');
                });
        }else{
            Schema::create('patients', function (Blueprint $table) {
                $table->increments('id');
                $table->integer('user_id')->unsigned();
                $table->string('first_name',255);
                $table->string('last_name',255);
                $table->string('email');
                $table->string('phone',100);
                $table->integer('status_id')->unsigned();
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
        Schema::drop('patients');
    }
}
