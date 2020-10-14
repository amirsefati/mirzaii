<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOnlineschedulesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('onlineschedules', function (Blueprint $table) {
            $table->id();
            $table->integer('class_id');
            $table->text('link');
            $table->string('date_time');

            $table->string('gender');
            $table->string('status')->nullable();
            $table->text('desc')->nullable();
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
        Schema::dropIfExists('onlineschedules');
    }
}
