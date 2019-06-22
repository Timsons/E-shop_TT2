<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
class CreateUser1Table extends Migration {
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('user1', function(Blueprint $table)
		{
			$table->integer('userID', true);
			$table->string('firstName', 256);
			$table->string('lastName', 256);
			$table->integer('roleID');
			$table->string('phoneNumber', 256);
			$table->string('shippingAddress', 256);
			$table->binary('password', 60);
			$table->string('email', 256);
		});
	}
	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('user1');
	}
}
