<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('family');
            $table->string('identity_code')->unique();
            $table->string('serial_identity')->nullable();
            $table->string('sadere')->nullable();

            $table->string('address')->nullable();
            
            $table->string('phone')->nullable();
            $table->string('phone_father')->nullable();
            $table->string('phone_mother')->nullable();

            $table->integer('level')->default(1);

            $table->string('profile_img')->nullable();
            $table->string('doc_img')->nullable();

            $table->string('gender');

            $table->string('father_name')->nullable();
            $table->string('father_work')->nullable();
            $table->string('mother_work')->nullable();
            $table->string('father_greduate')->nullable();
            $table->string('mother_greduate')->nullable();

            $table->string('father_study')->nullable();
            $table->string('mother_study')->nullable();

            $table->string('city_born')->nullable();
            $table->string('date_born')->nullable();

            $table->string('etc_1')->nullable();
            $table->string('etc_2')->nullable();

            $table->string('password');
            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
}
