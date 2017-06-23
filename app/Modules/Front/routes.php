<?php

Route::group(['namespace'=>'App\Modules\Front\Controllers'],function(){
  Route::get('/',['as'=>'front.getIndex','uses'=>'IndexController@getIndex']);
  Route::get('/recent-project',['as'=>'front.getRecent','uses'=>'IndexController@getIndex']);
  Route::get('/agency/{slug?}',['as'=>'front.getAgency','uses'=>'IndexController@getAgency']);
  Route::get('/projects',['as'=>'front.getProject','uses'=>'IndexController@getProject']);
  Route::get('/contact/{param?}',['as'=>'front.getContact','uses'=>'IndexController@getContact']);
  Route::post('/contact',['as'=>'front.postContact','uses'=>'IndexController@postContact']);

  // Route::get('/email',function(){
  //   return view('Front::emails.customer-received');
  // });




});
