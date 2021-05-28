<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRecordsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('records', function (Blueprint $table) {
            $table->id();



            $table->string('anamnesis')->nullable();
            $table->string('gender')->nullable();
            $table->string('ethnicity')->nullable();
            $table->string('marital_status')->nullable();
            $table->string('work')->nullable();
            $table->string('seaside')->nullable();
            $table->string('residence')->nullable();
            $table->string('instruction')->nullable();
            $table->string('type_of_blood')->nullable();
            $table->string('direction')->nullable();
            $table->string('reason')->nullable();
            $table->string('disease')->nullable();
            $table->string('fac')->nullable();
            $table->string('frc')->nullable();
            $table->string('ca')->nullable();
            $table->string('fc')->nullable();
            $table->string('sa')->nullable();
            $table->string('e')->nullable();
            $table->string('rm')->nullable();
            $table->string('ea')->nullable();
            $table->string('eg')->nullable();
            $table->string('egs')->nullable();
            $table->string('cir')->nullable();
            $table->string('aler')->nullable();
            //doctos
            $table->unsignedBigInteger('doctor_id');
            $table->foreign('doctor_id')->references('id')->on('doctors');
            //patients
            $table->unsignedBigInteger('patient_id');
            $table->foreign('patient_id')->references('id')->on('patients');

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
        Schema::dropIfExists('records');
    }
}
