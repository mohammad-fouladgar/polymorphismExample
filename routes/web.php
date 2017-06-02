<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It is a breeze. Simply tell Lumen the URIs it should respond to
| and give it the Closure to call when that URI is requested.
|
*/

$app->get('/', function () use ($app) {
    return $app->version();
});

$app->group(['prefix' => 'api/v1/'], function($app) {
	
	$app->group(['prefix'=>'pizza'],function($app){
		
		$app->get('order/{type}','PizzaStoreController@orderPizza');
	});

	$app->group(['prefix'=>'duck'],function($app){
		
		$app->get('fly','DuckController@fly');
		$app->get('quack','DuckController@quack');
	});

	$app->group(['prefix'=>'statistics'],function($app){
		
		$app->get('print/{candidate}/{count}','StatisticsController@printGuessStatistics');
	});
});