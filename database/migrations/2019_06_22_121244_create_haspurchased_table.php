<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
class CreateHaspurchasedTable extends Migration {
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('haspurchased', function(Blueprint $table)
		{
			$table->integer('productID')->index('productID');
			$table->integer('userID')->index('userID');
		});
	}
	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('haspurchased');
	}
}
