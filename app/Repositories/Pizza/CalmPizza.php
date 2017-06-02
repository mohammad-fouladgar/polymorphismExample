<?php
namespace App\Repositories\Pizza;

use App\Contracts\PolyPizza;

class CalmPizza extends PolyPizza
{
	public  function prepare()
	{
		
		// "CalmPizza prepare...";

		return $this;
	}
	
	public  function box()
	{	
		return "Your Calm pizza is boxed and ready ! :+1 ";
	}
}
