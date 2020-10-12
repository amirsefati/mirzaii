<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHomepagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('homepages', function (Blueprint $table) {
            $table->id();
            
            $table->string('gender');
            $table->string('cate')->nullable();

            $table->string('title')->nullable();
            $table->string('img')->nullable();
            $table->string('desc')->nullable();

            $table->string('category')->nullable();
            $table->string('config_name')->nullable();
            $table->string('config_value')->nullable();

            $table->string('etc')->nullable();
            $table->text('etc_1')->nullable();

            $table->integer('show')->nullable();

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
        Schema::dropIfExists('homepages');
    }
}
