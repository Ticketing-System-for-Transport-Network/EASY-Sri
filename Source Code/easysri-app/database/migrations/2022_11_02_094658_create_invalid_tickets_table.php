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
        Schema::create('invalid_tickets', function (Blueprint $table) {
            $table->id();
            $table->string('card_no');
            $table->string('c_name')->nullable();
            $table->string('route_id');
            $table->string('arr')->nullable();
            $table->date('i_date')->nullable();
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
        Schema::dropIfExists('invalid_tickets');
    }
};
