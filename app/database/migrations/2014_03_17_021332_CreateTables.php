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
		Schema::create('photos', function(Blueprint $table)
		{
			$table->increments('id');
			$table->timestamps();
			$table->string('thumb_location');
			$table->string('med_location');
			$table->string('full_location');
			$table->text('description')->nullable();
		});

		Schema::create('trips', function(Blueprint $table)
		{
			$table->increments('id');
			$table->timestamps();
			$table->string('title');
			$table->text('description');
			$table->integer('featured_image')->unsigned();
			$table->foreign('featured_image')->references('id')->on('photos');
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
			$table->integer('featured_image')->unsigned();
			$table->foreign('featured_image')->references('id')->on('photos');
			$table->integer('trip_id')->unsigned();
			$table->foreign('trip_id')->references('id')->on('trips')->onDelete('cascade')->onUpdate('cascade');
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
		Schema::drop('imageables');
		Schema::drop('photos');
		Schema::drop('spots');
		Schema::drop('trips');
	}

}
