<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductcommentTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('productcomment', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedInteger('productID');
            $table->unsignedInteger('commentID');
            $table->foreign('productID')->references('productID')->on('product');
            $table->foreign('commentID')->references('commentID')->on('comment');
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
        Schema::dropIfExists('productcomment');
    }
}
