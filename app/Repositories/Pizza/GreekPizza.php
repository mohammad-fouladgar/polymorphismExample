<?php

namespace App\Repositories\Pizza;

use App\Contracts\PolyPizza;

class GreekPizza extends PolyPizza
{
	public  function prepare()
	{
		// "GreekPizza prepare...";

		return $this;
	}
	
	public  function box()
	{
		return "Your Greek pizza is boxed and ready ! :+1 ";
	}
	
}