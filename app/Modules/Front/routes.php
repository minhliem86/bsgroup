<?php
Route::group(['middleware' => ['web', 'language'],'namespace'=>'App\Modules\Front\Controllers'],function(){
    // dd(trans('routes.test'));
// dd(Session::get('applocale'));
    Route::get(trans('routes.test'), ['as' =>'abc.about' , function (){
        // return view('Front::pages.language');
        return trans('routes.contact');
    }]);
    Route::get('/language-switch/{lang}', ['as' =>'front.switchLang', 'uses' => 'LanguageController@swithLanguage']);


    Route::get('/',['as'=>'front.getIndex','uses'=>'HomeController@index']);
    Route::get('/recent-project',['as'=>'front.getRecent','uses'=>'HomeController@index']);
    Route::get('/agency/{slug?}',['as'=>'front.getAgency','uses'=>'ClientController@index']);
    Route::get('/projects',['as'=>'front.getProject','uses'=>'ProjectController@index']);
    Route::get('/contact/{param?}',['as'=>'front.getContact','uses'=>'ContactController@index']);
    Route::post('/contact',['as'=>'front.postContact','uses'=>'ContactController@postIndex']);

});
