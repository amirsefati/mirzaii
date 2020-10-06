<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateExercisenoticesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('exercisenotices', function (Blueprint $table) {
            $table->id();
            $table->integer('course_id');
            $table->integer('assginment_id');
            $table->integer('class_id')->nullable();

            $table->string('timer');
            $table->string('title')->nullable();

            $table->string('etc')->nullable();
            $table->string('etc_1')->nullable();

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
        Schema::dropIfExists('exercisenotices');
    }
}
