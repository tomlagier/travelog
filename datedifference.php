<?php

function dateDifference($date)
{
	$parts = explode('.', $date);

	$currTimestamp = strtotime($parts[0] . '/' . $parts[1] . '/' . $parts[2]);

	$beginYearTimestamp = strtotime('01/01/'.$parts[2]);

	$difference = $currTimestamp - $beginYearTimestamp;

	$SECONDS_PER_DAY = 60 * 60 * 24;

	echo $difference / $SECONDS_PER_DAY;
}

dateDifference('01.15.2014');