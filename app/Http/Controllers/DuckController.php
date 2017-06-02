<?php

namespace App\Http\Controllers;

use Illuminate\Http\Response;

use App\Contracts\Duck;
/**
 * 
 */
class DuckController extends Controller
{
	/**
	 * [$duck description]
	 * @var [type]
	 */
	private $duck;

	/**
	 * [__construct description]
	 * @param Duck $duck [description]
	 */
	function __construct(Duck $duck)
	{
		$this->duck = $duck;
	}
	
	/**
	 * [fly description]
	 * @return [type] [description]
	 */
	public function fly()
	{
		return response()->json([
			'message'=> $this->duck->fly(),
   		]);
	}

	/**
	 * [quack description]
	 * @return [type] [description]
	 */
	public function quack()
	{
		return response()->json([
			'message'=> $this->duck->quack(),
   		]);
	}
}
