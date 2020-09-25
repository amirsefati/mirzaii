<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNoticeSchoolsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('notice_schools', function (Blueprint $table) {
            $table->id();
            $table->string('img');
            $table->string('title');
            $table->string('desc')->nullable();
            $table->string('desc_2')->nullable();
            $table->string('category')->nullable();
            $table->string('order');
            $table->string('show');
            $table->string('gender');

            $table->string('etc_1')->nullable();
            $table->string('etc_2')->nullable();

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
        Schema::dropIfExists('notice_schools');
    }
}
