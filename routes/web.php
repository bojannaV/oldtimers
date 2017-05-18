<?php

Route::get('/', function () {
    return view('welcome');
})->name('welcome');

Route::get('/admin', function(){
    return view('admin.dashboard');
})->middleware('auth.basic');

Route::name('cars.index')->get('cars', function(){
    return view('cars.index');
});
