<?php

use App\Contracts\Duck;

class DuckControllerTest extends TestCase
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
    function __construct()
    {
        $this->duck = app(Duck::class);
    }

   /**
    * [testDecoyFlyReturnJsonMessage description]
    * @return [type] [description]
    */
    public function testFlyMethodReturnJsonMessage()
    {
        $this
        ->json('GET','api/v1/duck/fly')
        ->seeStatusCode(200)
        ->seeJsonEquals([
            'message'=> $this->duck->fly()
         ]);
   }

   /**
    * [testQuackMethodReturnJsonMessage description]
    * @return [type] [description]
    */
   public function testQuackMethodReturnJsonMessage()
    {
        $this
        ->json('GET','api/v1/duck/quack')
        ->seeStatusCode(200)
        ->seeJsonEquals([
            'message'=> $this->duck->quack()
         ]);
   }
}
