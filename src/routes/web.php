<?php 


Route::group([ 'namespace'=>'daimekashiya\packagetemplate\Http\Controllers',  'middleware' => 'web' ], function(){

	Route::prefix('packagetemplate')->group(function () {
	    Route::get('/', 'CoreController@index');

	});

});


