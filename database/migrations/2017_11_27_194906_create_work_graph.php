<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateWorkGraph extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('work_graphs', function (Blueprint $table) {
            $table->increments('id');
            $table->time('time_open');
            $table->time('time_closed');
            $table->unsignedInteger('shop_id');
            $table->unsignedInteger('week_id');
            $table->boolean('is_work');

            $table->foreign('shop_id')
                ->references('id')->on('shops');

            $table->foreign('week_id')
                ->references('id')->on('week');

            $table->index(['time_open','time_closed']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('work_graphs');
    }
}
