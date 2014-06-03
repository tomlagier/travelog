<?php

/**
 * Helper functions for formatting dates and times
 */

class DateHelper {

	/**
	 * Accepts an arbitrary date string, returns display formatted string.
	 */
	static function displayDate($date){
		return date('M jS, Y', strtotime($date));
	}

}