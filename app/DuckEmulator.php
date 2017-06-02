<?php

namespace App;

use App\Contracts\Duck;
/**
 * 
 */
class DuckEmulator{
	/**
	* @var int $type
	*/
	protected $type;
	/**
	 * [$duck description]
	 * @var [type]
	 */
	private $duck;

	public static $DECOY_DUCK    = 0;
	public static $MALLARD_DUCK  = 1;
	public static $RUBBER_DUCK   = 2;
	public static $RED_HEAD_DUCK = 3;

	public function __construct($type)
	{
		$this->type = $type;
		
		$this->init();
	}

	private function init()
	{
		$class = 'App\\Repositories\\Duck\\';

		switch ($this->type) 
		{
			case self::$MALLARD_DUCK:
				$class .= 'MallardDuck';
				break;
			case self::$DECOY_DUCK:
				$class .= 'DecoydDuck';
				break;
			case self::$RED_HEAD_DUCK:
				$class .= 'RedHeadDuck';
				break;
			case self::$RUBBER_DUCK:
				$class .= 'RubberDuck';
				break;
			default:
				throw new InvalidArgumentException("Invalid duck type");
		}

		

		if(! class_exists($class)) 
            throw new Exception('Unsupported duck type');
        
        $this->app->bind(
            'App\\Contracts\\Duck',
            "{$class}"
        );
  //       $this->duck =  new $class();
	}
   	
   	private  function getTypeString()
	{
		// return $this->duck->getTypeString();
	}

	public function fly()
	{
		// return $this->duck->fly();
	}

	public function quack()
	{
		// return $this->duck->quack();
	}
}