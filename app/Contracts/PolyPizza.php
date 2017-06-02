<?php

namespace App\Contracts;


abstract class PolyPizza
{
	/**
	* [bake description]
	* @return [type] [description]
	*/
	public function bake()
	{
		// "bake your pizza...";
		
		return $this;
	}

	/**
	 * [cut description]
	 * @return [type] [description]
	 */
	public function cut()
	{
		// "cut your pizza...";
		
		return $this;
	}
	
	/**
	 * [prepare description]
	 * @return [type] [description]
	 */
	public abstract function prepare();
	
	/**
	 * [box description]
	 * @return [type] [description]
	 */
	public abstract function box();
}
