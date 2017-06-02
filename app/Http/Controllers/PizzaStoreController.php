<?php

namespace App\Http\Controllers;

use Illuminate\Http\Response;

/**
 * 
 */
class PizzaStoreController extends Controller
{
   /**
    * [orderPizza description]
    * @param  [type] $type [description]
    * @return [type]       [description]
    */
   public function orderPizza($type)
   {
      
   		try {

        $pizza = $this->getPizza($type);
      } catch (\Exception $e) {
        return response()->json(['message'=>$e->getMessage()]);
      }
   		
   		$pizza = $pizza->prepare()
                     ->bake()
                     ->cut()
                     ->box();

   	 return response()->json($pizza);
   }

   /**
    * [getPizza description]
    * @param  [type] $type [description]
    * @return [type]       [description]
    */
   private function getPizza($type)
   {
     $pizza = 'App\\Repositories\\Pizza\\'.ucfirst($type).'Pizza';

      if(! class_exists($pizza)) 
      {
        throw new \Exception("Unsupported '$type' pizza.", 1);
      }

      return app($pizza);
   }
}
