<?php
Route::group([], function(){
  Route::get('/front',function(){
    return "front";
  });
  Route::get('/ga', function(){
      $ga = Analytics::getVisitorsAndPageViews(7);
      dd($ga);
  });
});
