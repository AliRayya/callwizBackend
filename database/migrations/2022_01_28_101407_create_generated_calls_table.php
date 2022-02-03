<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGeneratedCallsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('generated_calls', function (Blueprint $table) {
            $table->id();
            $table->integer('traffic_stream_id')->unsigned();
            $table->string('dialed_number');
            $table->string('ANI');
            $table->string('call_duration')->default(2);
            $table->boolean('isDialed')->default(FALSE);
            $table->foreign('traffic_stream_id')->references('id')->on('traffic_streams')
        ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('generated_calls');
    }
}
