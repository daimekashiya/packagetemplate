<?php

namespace daimekashiya\packagetemplate;

use Illuminate\Support\ServiceProvider;

class CoreProvider extends ServiceProvider{
	
	public function boot(){

		$this->loadRoutesFrom(__DIR__.'/routes/web.php');
		$this->loadViewsFrom(__DIR__.'/views', 'packagetemplate');
		//$this->loadMigrationsFrom(__DIR__.'/database/migrations');
	}


	public function register(){
	
	}
}