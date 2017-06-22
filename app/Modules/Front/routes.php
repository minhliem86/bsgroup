<?php
Route::group([], function(){
  Route::get('/front',function(){
    return "front";
  });

  Route::get('/ga', function(){
    $ga = Analytics::fetchTotalVisitorsAndPageViews(\developeruz\Analytics\Period::days(7));
    dd($ga);
  });
});
