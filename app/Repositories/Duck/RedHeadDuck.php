<?php

namespace App\Repositories\Duck;

use App\Contracts\Duck;

class RedHeadDuck implements Duck
{
	public function fly()
	{
		return $this->getTypeString() . " is flying";
	}

	public function quack()
	{
		return $this->getTypeString() . " says: Quack! Quack!";
	}

	public function getTypeString()
	{
		return "Red head duck";
	}
	
}