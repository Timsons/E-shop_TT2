<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
class CreateProductkeywordTable extends Migration {
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('productkeyword', function(Blueprint $table)
		{
			$table->integer('productID')->index('productID');
			$table->integer('keywordID')->index('keywordID');
		});
	}
	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('productkeyword');
	}
}
