<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAppointmentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('appointments', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('patient_id')->unsigned();
            $table->integer('office_id')->unsigned();
            $table->dateTime('appiontment_date');
            $table->decimal('amount',10,2);
            $table->integer('status_id')->unsigned();
            $table->timestamps();

            $table->foreign('patient_id')->references('id')->on('patients')
                    ->onUpdate('CASCADE')
                    ->onDelete('NO ACTION');

            $table->foreign('office_id')->references('id')->on('offices')
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
        Schema::drop('appointments');
    }
}
