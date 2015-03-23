<?php

/**
 * https://en.wikipedia.org/wiki/Newton%27s_method
 */

function sqr_root($x, $accuracy = 0.0001, $round = 3)
{
	if ($x < 0) return 'error';

	$a = (float) 1;
	$b = (float) $x;

	while ( abs($b-$a) > $accuracy ) {
		$b = ($a + $b) / 2;
		$a = $x / $b;
	}

	return round($b, $round);
}

// Tests
print sqr_root(0.4) . "\n"; #0.632
print sqr_root(100) . "\n"; #10
print sqr_root(12) . "\n"; #3.464