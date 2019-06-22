<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateProductTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('product', function(Blueprint $table)
		{
			$table->integer('productID', true);
			$table->string('code', 256);
			$table->string('name', 256);
			$table->string('description', 1024)->nullable();
			$table->decimal('price')->nullable();
			$table->binary('image', 65535)->nullable();
			$table->integer('categoryID')->nullable()->index('categoryID');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('product');
	}

}
