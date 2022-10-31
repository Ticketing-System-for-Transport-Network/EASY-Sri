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
            $table->unsignedBigInteger('login_id');
            $table->string('login_email')->unique();
            $table->string('Fname');
            $table->string('Lname');
            $table->string('NIC')->unique();
            $table->string('Address');
            $table->string('City');
            $table->string('Zipcode');
            $table->string('MobNo');
            $table->double('Initalpay');
            $table->timestamps();

            $table->foreign('login_id')->references('id')->on('users');
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
