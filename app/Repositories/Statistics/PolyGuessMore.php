<?php
namespace App\Repositories\Statistics;

use App\Contracts\PolyGuess;

class PolyGuessMore implements PolyGuess
{
	public function print($candidate,$count)
	{
		$number = $count;
		$verb   = "are";
		$plural = str_plural($candidate);

		return sprintf("There %s %s %s",$verb,$number,$plural);
	}
}