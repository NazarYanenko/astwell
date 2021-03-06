<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateWorkTime extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('work_time', function (Blueprint $table) {
            $table->increments('id');
            $table->time('time_open');
            $table->time('time_closed');
            $table->date('date');
            $table->boolean('is_open');
            $table->unsignedInteger('shop_id')->nullable();

            $table->index(['time_open', 'time_closed','date']);
            $table->foreign('shop_id')->references('id')->on('shops');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('work_time');
    }
}
