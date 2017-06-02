<?php

namespace App\Repositories\Pizza;

use App\Contracts\PolyPizza;

class VeggiePizza extends PolyPizza
{
	public  function prepare()
	{
		// "VeggiePizza prepare...";
		
		return $this;
	}
	
	public  function box()
	{
		return "Your Veggie pizza is boxed and ready ! :+1 ";
	}
	
}