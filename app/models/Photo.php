<?php

class Photo extends Eloquent {

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'photos';

    public function spots(){
    	return $this->morphedByMany('Spot', 'imageable');
    }

    public function trips(){
    	return $this->morphedByMany('Trip', 'imageable');
    }
}