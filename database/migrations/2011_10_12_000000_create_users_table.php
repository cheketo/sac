<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {

        if(Schema::hasTable('status') && Schema::hasTable('groups') && Schema::hasTable('profiles') && Schema::hasTable('users')){
            Schema::table('users', function (Blueprint $table) {
                $table->integer('profile_id')->unsigned()->change();

                $table->foreign('profile_id')->references('id')->on('profiles')
                        ->onUpdate('CASCADE')
                        ->onDelete('NO ACTION')->change();

                $table->foreign('group_id')->references('id')->on('groups')
                        ->onUpdate('CASCADE')
                        ->onDelete('NO ACTION')->change();

                $table->foreign('status_id')->references('id')->on('status')
                        ->onUpdate('CASCADE')
                        ->onDelete('NO ACTION')->change();

                $table->foreign('creator_id')->references('id')->on('users')
                        ->onUpdate('CASCADE')
                        ->onDelete('NO ACTION')->change();
            });
        }else{
            Schema::create('users', function (Blueprint $table) {
                $table->increments('id');
                $table->string('first_name',255);
                $table->string('last_name',255);
                $table->string('user',100)->unique();
                $table->string('email')->unique();
                $table->string('password', 60);
                $table->integer('profile_id')->unsigned();
                $table->integer('group_id')->unsigned();
                $table->integer('status_id')->unsigned();
                $table->integer('creator_id')->unsigned();
                $table->rememberToken();
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
        Schema::drop('users');
    }
}
