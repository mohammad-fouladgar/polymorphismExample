<?php

namespace App\Http\Controllers;

use Illuminate\Http\Response;

/**
 * 
 */
class StatisticsController extends Controller
{
	
	public function printGuessStatistics($candidate,$count)
	{

		try {
			$guessType = $this->getType($count);
		} catch (\Exception $e) {
			 return response()->json(['message'=>$e->getMessage()]);;
		}
		
		return response()->json(['message'=>$guessType->print($candidate,$count)]);
	}	

	private function getType($count=0)
	{
		$class = 'App\\Repositories\\Statistics\\PolyGuess';
    	
    	if ($count <=0 )
    	{
    		$class .='Zero';
    	}
    	elseif ($count == 1)
    	{
    		$class .='One';
    	}
    	else
    	{
    		$class .='More';
    	}
    
    	if( ! class_exists($class)) {
            
            throw new \Exception('Unsupported type');
        }

        app()->bind(\App\Constract\PolyGuess::class,$class);
        
        $maked = app()->make('App\Constract\PolyGuess');
  		
  		return new $maked;
	}
}
