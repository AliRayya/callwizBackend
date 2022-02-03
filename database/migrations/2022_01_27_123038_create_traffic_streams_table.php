<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTrafficStreamsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('traffic_streams', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->integer('traffic_ACD');
            $table->integer('traffic_ASR');
            $table->integer('traffic_total_minutes');
            $table->char('traffic_name');
            $table->char('traffic_user');
            $table->char('traffic_type');
            $table->char('traffic_destination');
            $table->char('traffic_originator');
            $table->char('traffic_terminator');
            $table->dateTimeTz('traffic_start_time');
            $table->dateTimeTz('traffic_end_time');
            $table->boolean('traffic_status');
            $table->boolean('traffic_isPaused');
            $table->boolean('traffic_isComplete');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('traffic_streams');
    }
}
