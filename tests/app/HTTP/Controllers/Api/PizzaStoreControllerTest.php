<?php
use Illuminate\Http\Response;
/**
 * 
 */
class PizzaStoreControllerTest extends TestCase
{ 
  /**
   * can order pizza and see json message
   * @return [type] [description]
   */
   public function testCanOrderCalmPizzaWithJsonMessage()
   {
     $this
        ->json('GET','api/v1/pizza/order/calm')
        ->seeJsonEquals([
            'message'=> 'Your Calm pizza is boxed and ready ! :+1 '
         ]);
   }

   /**
    * If can order pizza so see status ok(200)
    * @return [type] [description]
    */
   public function testCanOrderPepperoniPizzaAndStatusOk()
   {
      $response = $this->call('GET', 'api/v1/pizza/order/pepperoni');

      $this->assertEquals(Response::HTTP_OK, $response->status());
   }

   /**
    * Can not order any pizza if not exists
    * @return [type] [description]
    */
   public function testCanNotOrderMushroomPizzaIfNotExists()
   {
     $this
        ->json('GET','api/v1/pizza/order/mushroom')
        ->seeStatusCode(404)
        ->seeJsonEquals([
            'message'=> "Unsupported 'mushroom' pizza."
         ]);
   }
}
