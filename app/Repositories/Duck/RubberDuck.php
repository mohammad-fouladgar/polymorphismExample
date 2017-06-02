<?php

namespace App\Repositories\Duck;

use App\Contracts\Duck;

class RubberDuck implements Duck
{
	public function fly()
	{
		
		return $this->getTypeString() . " can't fly!";
	}

	public function quack()
	{
		return $this->getTypeString() . " says: Squeak!";
	}

	public function getTypeString()
	{
		return "Rubber duck";
	}
	
}