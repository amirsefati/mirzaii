<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCoursesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('courses', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('grade');

            $table->string('desc')->nullable();

            $table->string('img')->nullable();
            $table->integer('show')->default(1);

            $table->timestamps();
        });

        Schema::create('course_classify' , function (Blueprint $table){
            $table->unsignedBigInteger('course_id');
            $table->unsignedBigInteger('classify_id');

            $table->foreign('course_id')->references('id')->on('courses')->onDelete('cascade');
            $table->foreign('classify_id')->references('id')->on('classifies')->onDelete('cascade');
        });


        
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('courses');
    }
}
