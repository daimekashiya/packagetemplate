<?php

namespace daimekashiya\packagetemplate\providers;

use Illuminate\Support\ServiceProvider;

class CoreProvider extends ServiceProvider{
	
	public function boot(){

		$this->loadRoutesFrom(__DIR__.'/routes/web.php');
		$this->loadViewsFrom(__DIR__.'/views', 'packagetemplate');
		$this->loadMigrationsFrom(__DIR__.'/migrations');
		$this->loadTranslationsFrom(__DIR__.'/lang', 'packagetemplate');

	}


	public function register(){
	
	}
}
