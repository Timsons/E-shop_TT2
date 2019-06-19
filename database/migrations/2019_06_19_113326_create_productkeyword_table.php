<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductkeywordTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('productkeyword', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedInteger('productID');
            $table->unsignedInteger('keywordID');
            $table->foreign('productID')->references('productID')->on('product');
            $table->foreign('keywordID')->references('keywordID')->on('keyword');
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
        Schema::dropIfExists('productkeyword');
    }
}
