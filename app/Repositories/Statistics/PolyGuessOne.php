<?php
namespace App\Repositories\Statistics;

use App\Contracts\PolyGuess;

class PolyGuessOne implements PolyGuess
{
	public function print($candidate,$count)
	{
		$number = $count;
		$verb   = "is";
		$plural =  str_singular($candidate);

		return sprintf("There %s %s %s",$verb,$number,$plural);
	}
}

