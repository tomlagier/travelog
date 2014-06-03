<?php

class DatabaseSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		Eloquent::unguard();

		$this->call('TripsTableSeeder');
	}

}

class TripsTableSeeder extends Seeder {

    public function run()
    {

    	//Clear all tables
        DB::table('imageables')->delete();
        DB::table('photos')->delete();
        DB::table('spots')->delete();
        DB::table('trips')->delete();

        //Create our models
        //Trips
        $trip1 = new Trip(array('title' => 'Trip title', 'description' => 'This is a sample description'));
        $trip2 = new Trip(array('title' => 'Trip title2', 'description' => 'This is another sample description'));

        //Spots
        $spot1 = new Spot(array(	'title' => 'A spot title',
        							'description' => 'A spot description',
        							'address' => '778 Peach St, B San Luis Obispo CA 93401', 
        							'latitude' => '-34.112314',
        							'longitude' => '128.141313',
        							'arrived' => '2014-08-23',
        							'departed' => '2014-08-24',
        							'rating' => '5'));

        $spot2 = new Spot(array(	'title' => 'A spot title',
        							'description' => 'A spot description',
        							'address' => '778 Peach St, B San Luis Obispo CA 93401', 
        							'latitude' => '-35.112314',
        							'longitude' => '128.141313',
        							'arrived' => '2014-08-24',
        							'departed' => '2014-08-25',
        							'rating' => '5'));

        $spot3 = new Spot(array(	'title' => 'A spot title',
        							'description' => 'A spot description',
        							'address' => '778 Peach St, B San Luis Obispo CA 93401', 
        							'latitude' => '-36.112314',
        							'longitude' => '128.141313',
        							'arrived' => '2014-08-25',
        							'departed' => '2014-08-26',
        							'rating' => '5'));

        $spot4 = new Spot(array(    'title' => 'A spot title',
                                    'description' => 'A spot description',
                                    'address' => '778 Peach St, B San Luis Obispo CA 93401', 
                                    'latitude' => '-36.112314',
                                    'longitude' => '128.141313',
                                    'arrived' => '2014-08-25',
                                    'departed' => '2014-08-26',
                                    'rating' => '5'));

        $spot5 = new Spot(array(    'title' => 'A spot title',
                                    'description' => 'A spot description',
                                    'address' => '778 Peach St, B San Luis Obispo CA 93401', 
                                    'latitude' => '-36.112314',
                                    'longitude' => '128.141313',
                                    'arrived' => '2014-08-25',
                                    'departed' => '2014-08-26',
                                    'rating' => '5'));

        //Photos
        $photo1 = Photo::create(array('full_location' => '/uploads/image1.jpg', 
                                      'med_location' => '/uploads/image1.jpg',
                                      'thumb_location' => '/uploads/image1.jpg', 
                                      'description' => 'image1 description'));

        $photo2 = Photo::create(array('full_location' => '/uploads/image2.jpg', 
                                      'med_location' => '/uploads/image2.jpg',
                                      'thumb_location' => '/uploads/image2.jpg', 
                                      'description' => 'image2 description'));

        $photo3 = Photo::create(array('full_location' => '/uploads/image3.jpg', 
                                      'med_location' => '/uploads/image3.jpg',
                                      'thumb_location' => '/uploads/image3.jpg', 
                                      'description' => 'image3 description'));

        //Define our relationships
        
        $trip1->image()->associate($photo1);
        $trip2->image()->associate($photo2);

        $trip1->save();
        $trip2->save();
        
        $spot1->trip()->associate($trip1);
        $spot2->trip()->associate($trip1);
        $spot3->trip()->associate($trip1);
        $spot4->trip()->associate($trip1);
        $spot5->trip()->associate($trip1);

        $spot1->image()->associate($photo1);
        $spot2->image()->associate($photo2);
        $spot3->image()->associate($photo3);
        $spot4->image()->associate($photo3);
        $spot5->image()->associate($photo3);

        $spot1->save();
        $spot2->save();
        $spot3->save();
        $spot4->save();
        $spot5->save();

        //Photos created, attached, and saved
        $trip1->photos()->save($photo1);
        $trip2->photos()->save($photo3);

        $spot1->photos()->save($photo1);
        $spot1->photos()->save($photo2);
        $spot1->photos()->save($photo1);
        $spot1->photos()->save($photo2);
        $spot1->photos()->save($photo1);
        $spot1->photos()->save($photo2);

        $spot2->photos()->save($photo2);
        $spot2->photos()->save($photo3);

        $spot3->photos()->save($photo1);
        $spot3->photos()->save($photo3);

    }

}