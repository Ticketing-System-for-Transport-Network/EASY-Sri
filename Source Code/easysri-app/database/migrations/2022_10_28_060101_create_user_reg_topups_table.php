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
        Schema::create('user_reg_topups', function (Blueprint $table) {
            $table->id('userregid');
            $table->string('Easysrino');
            $table->string('Fname');
            $table->string('Lname');
            $table->string('NIC')->unique();
            $table->string('Address');
            $table->string('City');
            $table->string('Zipcode');
            $table->string('MobNo');
            $table->double('Initalpay');
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
        Schema::dropIfExists('user_reg_topups');
    }
};
