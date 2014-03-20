<?php

class Spot extends Eloquent {

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'spots';

	public function trip(){
		return $this->belongsTo('Trip');
	}

	public function photos()
    {
        return $this->morphToMany('Photo', 'imageable');
    }

}