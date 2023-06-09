<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCorrectAnswerTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('correct_answer', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('questions_id'); 
            $table->foreign('questions_id')->references('id')->on('questions')->onDelete('cascade'); 
            $table->string('correctanswer',255); 
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
        Schema::dropIfExists('correct_answer');
    }
}
