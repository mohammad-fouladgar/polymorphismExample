<?php
namespace App\Repositories\Statistics;

use App\Contracts\PolyGuess;

class polyGuessZero implements PolyGuess
{
	public function print($candidate,$count)
	{
		$number = "no";
		$verb   = "are";
		$plural = str_plural($candidate);

		return sprintf("There %s %s %s",$verb,$number,$plural);
	}
	
}