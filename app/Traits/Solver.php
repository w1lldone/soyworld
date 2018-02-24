<?php

namespace App\Traits;

trait Solver
{

	// Function to calculate standard deviation
	public function stdDev($collection) {

		if ($collection->count() == 1) {
			return 0;
		}

		$mean = $collection->avg();
		// Find variation and sum it
		$variations = $collection->map(function ($item) use ($mean)
		{
			return pow($item-$mean, 2);
		})->sum();

		// return square root of (variation sum, divided by n-1) 
		return sqrt($variations/($collection->count()-1));
	}
	
}