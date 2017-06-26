<?php
Route::group(['middleware' => ['web', 'language'],'namespace'=>'App\Modules\Front\Controllers'],function(){

    Route::get(trans('routes.about'), ['as' =>'test.about' , function (){

        return view('Front::pages.language');

    }]);
    Route::get('/language-switch/{lang}', ['as' =>'front.switchLang', 'uses' => 'LanguageController@swithLanguage']);


    Route::get('/',['as'=>'front.getIndex','uses'=>'HomeController@index']);
    Route::get('/recent-project',['as'=>'front.getRecent','uses'=>'HomeController@index']);
    Route::get('/agency/{slug?}',['as'=>'front.getAgency','uses'=>'ClientController@index']);
    Route::get('/projects',['as'=>'front.getProject','uses'=>'ProjectController@index']);
    Route::get('/contact/{param?}',['as'=>'front.getContact','uses'=>'ContactController@index']);
Route::post('/contact',['as'=>'front.postContact','uses'=>'ContactController@postIndex']);

});
