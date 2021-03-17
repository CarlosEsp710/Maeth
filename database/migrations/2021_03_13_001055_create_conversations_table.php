<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateConversationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('conversations', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('user_profile_id')->unsigned();
            $table->bigInteger('seconde_user_profile_id')->unsigned();
            $table->timestamps();

            $table->foreign('seconde_user_profile_id')->references('id')->on('nutritionist_profiles')
                ->onDelete('cascade')
                ->onUpdate('cascade');
            $table->foreign('user_profile_id')->references('id')->on('patient_profiles')
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
        Schema::dropIfExists('conversations');
    }
}
