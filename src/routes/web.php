<?php 


Route::group([ 'namespace'=>'ehekks\blanktemplate\Http\Controllers',  'middleware' => 'web' ], function(){

	Route::prefix('packagetemplate')->group(function () {
	    Route::get('/', 'SampleController@index');
	});

});
