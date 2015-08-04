<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProfilesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('profiles', function (Blueprint $table) {
            $table->increments('id');
            $table->string('es_name',100);
            $table->string('en_name',100);
            $table->string('fr_name',100);
            $table->string('it_name',100);
            $table->string('ge_name',100);
            $table->string('jp_name',100);
            $table->string('pt_name',100);
            $table->string('ru_name',100);
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
        Schema::drop('profiles');
    }
}