<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDoctorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('doctors', function (Blueprint $table) {
            $table->increments('id');
            $table->string('fullname');
            $table->string('username');
            $table->string('password');
            $table->string('address');
            $table->string('phone');
            $table->string('email')->unique();
            $table->integer('active');
            $table->integer('role_id')->unsigned();
            $table->date('birthday');
            $table->string('avatar');
            $table->string('preview');
            $table->string('detail');
            $table->integer('faculty_id')->unsigned();
            $table->foreign('role_id')->references('id')->on('roles');
            $table->foreign('faculty_id')->references('id')->on('faculty');
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
        Schema::dropIfExists('doctors');
    }
}
