<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateWeatherStatusesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('weather_statuses', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('city_id')->unsigned();
            $table->float('temp_celsius');
            $table->string('status');
            $table->timestamp('last_update');
            $table->string('provider');
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
        Schema::dropIfExists('weather_statuses');
    }
}
