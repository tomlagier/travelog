<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTables extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('trips', function(Blueprint $table)
		{
			$table->increments('id');
			$table->timestamps();
			$table->string('title');
			$table->text('description');
		});

		Schema::create('spots', function(Blueprint $table)
		{
			$table->increments('id');
			$table->timestamps();
			$table->string('title');
			$table->text('description');
			$table->string('address');
			$table->decimal('latitude', 13, 8);
			$table->decimal('longitude', 13, 8);
			$table->date('arrived');
			$table->date('departed');
			$table->integer('rating')->nullable();
			$table->integer('trip_id')->unsigned();
			$table->foreign('trip_id')->references('id')->on('trips')->onDelete('cascade')->onUpdate('cascade');
		});

		Schema::create('photos', function(Blueprint $table)
		{
			$table->increments('id');
			$table->timestamps();
			$table->string('image');
			$table->text('description')->nullable();
		});

		Schema::create('imageables', function(Blueprint $table){
			$table->integer('photo_id')->unsigned();
			$table->integer('imageable_id')->unsigned();
			$table->string('imageable_type');
			$table->foreign('photo_id')->references('id')->on('photos')->onDelete('cascade')->onUpdate('cascade');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('spots');
		Schema::drop('trips');
		Schema::drop('photos');
		Schema::drop('imageables');
	}

}
