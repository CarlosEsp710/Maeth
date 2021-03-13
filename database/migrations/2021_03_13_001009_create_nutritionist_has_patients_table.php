<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNutritionistHasPatientsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('nutritionist_has_patients', function (Blueprint $table) {
            $table->bigInteger('nutritionist_profile_id')->unsigned();
            $table->bigInteger('patient_profile_id')->unsigned();
            $table->timestamps();

            $table->foreign('nutritionist_profile_id')->references('id')->on('nutritionist_profiles')
                ->onDelete('cascade')
                ->onUpdate('cascade');
            $table->foreign('patient_profile_id')->references('id')->on('patient_profiles')
                ->onDelete('cascade')
                ->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('nutritionist_has_patients');
    }
}
