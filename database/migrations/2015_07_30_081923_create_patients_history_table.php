<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePatientsHistoryTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
         if(Schema::hasTable('patients') && Schema::hasTable('appointments') && Schema::hasTable('patients_history')){
            Schema::table('patients_history', function (Blueprint $table) {
                $table->increments('id');
                $table->integer('patient_id')->unsigned();
                $table->integer('appointment_id')->unsigned();
                $table->text('es_description');
                $table->text('en_description');
                $table->text('fr_description');
                $table->text('it_description');
                $table->text('ge_description');
                $table->text('jp_description');
                $table->text('pt_description');
                $table->text('ru_description');
                $table->timestamps();

                $table->foreign('patient_id')->references('id')->on('patients')
                        ->onUpdate('CASCADE')
                        ->onDelete('NO ACTION');

                $table->foreign('appointment_id')->references('id')->on('appointments')
                        ->onUpdate('CASCADE')
                        ->onDelete('NO ACTION');
            });
        }else{
            Schema::create('patients_history', function (Blueprint $table) {
                $table->increments('id');
                $table->integer('patient_id')->unsigned();
                $table->integer('appointment_id')->unsigned();
                $table->text('es_description');
                $table->text('en_description');
                $table->text('fr_description');
                $table->text('it_description');
                $table->text('ge_description');
                $table->text('jp_description');
                $table->text('pt_description');
                $table->text('ru_description');
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
        Schema::drop('patients_history');
    }
}
