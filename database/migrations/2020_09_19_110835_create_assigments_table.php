<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAssigmentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('assigments', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('desc');
            $table->string('teacher_created');

            $table->string('desc_2')->nullable();
            $table->string('img')->nullable();
            $table->string('course')->nullable();
            $table->string('file_video')->nullable();
            $table->string('file_video_2')->nullable();
            $table->string('file_video_title')->nullable();
            $table->string('file_video_2_title')->nullable();
            $table->string('file_doc')->nullable();
            $table->string('file_doc_2')->nullable();
            $table->string('file_doc_title')->nullable();
            $table->string('file_doc_2_title')->nullable();
            $table->string('show')->nullable();
            $table->integer('visitor_count')->default(0);
            $table->integer('who_download')->nullable();
            $table->integer('who_visit')->nullable();
            $table->timestamps();
        });


        Schema::create('course_assigment' , function (Blueprint $table){
            $table->unsignedBigInteger('course_id');
            $table->unsignedBigInteger('assigment_id');

            $table->foreign('course_id')->references('id')->on('courses')->onDelete('cascade');
            $table->foreign('assigment_id')->references('id')->on('assigments')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('assigments');
    }
}
