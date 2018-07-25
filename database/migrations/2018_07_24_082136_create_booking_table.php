<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBookingTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('booking', function (Blueprint $table) {
            $table->increments('id');
            $table->dateTime('time_book');
            $table->dateTime('time_exam');
            $table->integer('status_id')->unsigned();
            $table->integer('customer_id')->unsigned();
            $table->integer('doctor_id')->unsigned();
            $table->foreign('status_id')->references('id')->on('status');
            $table->foreign('customer_id')->references('id')->on('customers');
            $table->foreign('doctor_id')->references('id')->on('doctors');
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
        Schema::dropIfExists('booking');
    }
}
