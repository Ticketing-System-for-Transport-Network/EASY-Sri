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
        Schema::create('over_crowd_networks', function (Blueprint $table) {
            $table->id();
            $table->string('route_id');
            $table->string('arr')->nullable();
            $table->string('dep')->nullable();
            $table->date('o_date')->nullable();
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
        Schema::dropIfExists('over_crowd_networks');
    }
};
