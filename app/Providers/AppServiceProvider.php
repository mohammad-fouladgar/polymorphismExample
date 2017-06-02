<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->registerBindings();
    }

    /**
	 * Bind All interfaces on Repositories
	 * 
	 * @return [type] [description]
	 */
	public function registerBindings()
	{
		// This is just one example
		$ducks      = ['MallardDuck','DecoydDuck','RedHeadDuck','RubberDuck'];
		$duckDriver = $ducks[1];

        $this->app->bind(
            'App\\Contracts\\Duck',
            "App\\Repositories\\Duck\\{$duckDriver}"
        );

       
	}
}
