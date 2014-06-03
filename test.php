<?php

function fibonacci($n)
{
	$first = 0;
	$second = 1;

	if($n === 1)
	{
		echo 0 . ' ';
		return;
	}

	if($n === 2)
	{
		echo 1 . ' ';
		return;
	}

	for($i = 0; $i < $n - 2; $i++)
	{
		$result = $first + $second;
		$first = $second;
		$second = $result;
	}

	echo $result . ' ';
	return;
}

//Should output 0 1 1 2 3 5 8 13 21
for($i = 1; $i < 10; $i++)
{
	fibonacci($i);
}
