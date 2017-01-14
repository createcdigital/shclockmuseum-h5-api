<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBookingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bookings', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name')->default('');
            $table->string('phone')->default('');
            $table->string('date')->default('');
            $table->string('type')->default('');
            $table->string('group_ppl')->default('');
            $table->string('narrator')->default('');
            $table->string('item')->default('');
            $table->string('item_time')->default('');
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
        Schema::drop('bookings');
    }
}
