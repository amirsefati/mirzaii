<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNoticeClassesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('notice_classes', function (Blueprint $table) {
            $table->id();
            $table->string('img');
            $table->string('title');
            $table->string('desc');
            $table->string('category')->nullable();
            $table->integer('order');
            $table->string('show');
            $table->string('etc')->nullable();
            $table->string('etc_1')->nullable();
            $table->timestamps();
        });

        Schema::create('notice_class_classify', function (Blueprint $table) {
            $table->unsignedBigInteger('notice_class_id');
            $table->unsignedBigInteger('classify_id');

            $table->foreign('notice_class_id')->references('id')->on('notice_classes')->onDelete('cascade');
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
        Schema::dropIfExists('notice_classes');
    }
}
