<?php

Route::name('pages.index')->get('/', 'PageController@index');

Route::get('/admin', function(){
    return view('admin.dashboard');
})->middleware('auth.basic');

Route::name('cars.index')->get('fahrzeugen-aktuell', function(){
    return view('cars.index');
});

Route::name('cars.upcoming')->get('fahrzeugen-im-zulauf', function(){
    return view('cars.index');
});

Route::name('pages.contact')->get('kontakt', 'PageController@contact');
Route::name('pages.store.contact')->post('kontakt', 'PageController@storeContact');
Route::name('pages.about')->get('about', 'PageController@about');
