<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHaspurchasedTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('haspurchased', function (Blueprint $table) {
            $table->bigIncrements('id');
              $table->unsignedInteger('productID');
              $table->unsignedInteger('userID');
              $table->foreign('productID')->references('productID')->on('product');
              $table->foreign('userID')->references('userID')->on('users');
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
        Schema::dropIfExists('haspurchased');
    }
}
