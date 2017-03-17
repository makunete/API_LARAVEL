<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateInvalidesaTables extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('invalidesa', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('dte')->default('0');
            $table->string('barris')->default('');
            $table->integer('quantitat')->default('0');
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
        //Schema::dropIfExists('invalidesa');
        Schema::drop('invalidesa');
    }
}