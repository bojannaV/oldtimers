<?php

Route::name('pages.index')->get('/', 'PageController@index');

Route::get('/admin', function(){
    return view('admin.dashboard');
})->middleware('auth.basic');

Route::name('cars.index')->get('cars', function(){
    return view('cars.index');
});

Route::name('pages.contact')->get('kontakt', 'PageController@contact');
Route::name('pages.store.contact')->post('kontakt', 'PageController@storeContact');
