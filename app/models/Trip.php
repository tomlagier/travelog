<?php

use \DateHelper;

class Trip extends Eloquent {

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'trips';

	public function spots(){
		return $this->hasMany('Spot');
	}

	public function photos()
    {
        return $this->morphToMany('Photo', 'imageable');
    }

    public function image(){
    	return $this->belongsTo('Photo', 'featured_image');
    }

    /**
	 * Returns a trip object with all associated spots, photos, and a start and end date
	 * @param  [type] $id ID of the trip to return
	 */
	public static function getTrip($id){

		$trip = self::with('photos', 'image', 'spots.image', 'spots.photos')->find($id);
		$trip->arrived = DateHelper::displayDate($trip->spots[0]->arrived);
		$trip->departed = DateHelper::displayDate($trip->spots[sizeof($trip->spots) - 1]->departed);

		return $trip;
	}
}