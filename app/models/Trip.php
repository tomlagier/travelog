<?php

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
}