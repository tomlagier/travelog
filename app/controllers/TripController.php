<?php

class TripController extends BaseController {

	/*
	|--------------------------------------------------------------------------
	| Default Home Controller
	|--------------------------------------------------------------------------
	|
	| You may wish to use controllers instead of, or in addition to, Closure
	| based routes. That's great! Here is an example controller method to
	| get you started. To route to this controller, just add the route:
	|
	|	Route::get('/', 'HomeController@showWelcome');
	|
	*/

	protected $layout = 'layouts.main';

	public function trip($tripId = 1)
	{
		//Get our correctly formatted date strings
		$trip = Trip::getTrip($tripId);

		JavaScript::put([
			'trip' => $trip->toJson(),
		]);

		//Get spots from database
		//Prepare spots for display
		//Pass spots to frontend
		return View::make('trip.trip')->with('trip', $trip);

	}

}