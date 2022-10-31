<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bus_time_tables', function (Blueprint $table) {
            $table->id();
            $table->string('route_id');
            $table->string('dep')->nullable();
            $table->time('dep_time')->nullable();
            $table->string('arr')->nullable();
            $table->time('arr_time')->nullable();
            $table->float('dis')->nullable();
            $table->float('dis_time')->nullable();
            $table->string('bus_t')->nullable();
            $table->string('ser_t')->nullable();
            $table->integer('no_bus')->nullable();
            $table->double('charge')->nullable();
            $table->integer('done')->default(0);
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
        Schema::dropIfExists('bus_time_tables');
    }
};
