<?php 


Route::group([ 'namespace'=>'daimekashiya\blanktemplate\controllers',  'middleware' => 'web' ], function(){

	Route::prefix('packagetemplate')->group(function () {
	    Route::get('/', 'SampleController@index');
	});

});
