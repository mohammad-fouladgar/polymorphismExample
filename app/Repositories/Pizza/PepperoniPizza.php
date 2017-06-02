<?php

namespace App\Repositories\Pizza;

use App\Contracts\PolyPizza;

class PepperoniPizza extends PolyPizza
{
	
	public  function prepare()
	{
		// "PepperoniPizza prepare...";
		
		return $this;
	}
	
	public  function box()
	{
		return "Your Pepperoni pizza is boxed and ready ! :+1 ";
	}
}