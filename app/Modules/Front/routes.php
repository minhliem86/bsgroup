<?php

Route::group(['middleware' => ['web','language'],'namespace'=>'App\Modules\Front\Controllers'],function(){
  Route::get('/test',function(){
    return trans('routes.contact');
  });
  Route::get('/',['as'=>'front.getIndex','uses'=>'HomeController@index']);
  Route::get('/recent-project',['as'=>'front.getRecent','uses'=>'HomeController@index']);
  Route::get('/agency/{slug?}',['as'=>'front.getAgency','uses'=>'ClientController@index']);
  Route::get('/projects',['as'=>'front.getProject','uses'=>'ProjectController@index']);
  Route::get(trans("routes.contact").'/{param?}',['as'=>'front.getContact','uses'=>'ContactController@index']);
  Route::post('/contact',['as'=>'front.postContact','uses'=>'ContactController@postIndex']);

});
