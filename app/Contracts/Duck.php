<?php

namespace App\Contracts;

/**
 * 
 */
interface Duck{
	/**
	 * [fly description]
	 * @return [type] [description]
	 */
	public function fly();
	/**
	 * [quack description]
	 * @return [type] [description]
	 */
	public function quack();
	/**
	 * [getTypeString description]
	 * @return [type] [description]
	 */
	public function getTypeString();
}