<?php

namespace App\Repositories\Pizza;

use App\Contracts\PolyPizza;

class CheesePizza extends PolyPizza
{
	
	public  function prepare()
	{
		// "CheesePizza prepare...";
		
		return $this;
	}
	
	public  function box()
	{
		return "Your Cheese pizza is boxed and ready ! :+1 ";
	}
}