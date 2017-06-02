<?php
namespace App\Repositories\Duck;

use App\Contracts\Duck;

class DecoydDuck implements Duck
{
	public function fly()
	{
		return $this->getTypeString() . " can't fly!";
	}

	public function quack()
	{
		return $this->getTypeString() . " is always silent!";
	}

	public function getTypeString()
	{
		return "Decoy duck";
	}
	
}