<?php

Route::group(['namespace'=>'daimekashiya\packagetemplate\controllers'], function(){
    Route::get('packagetemplate', 'CoreController@index');
});