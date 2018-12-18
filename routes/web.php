<?php


Route::get('/', function () {
    return view('welcome');
});

//Going to a page, can do the dot syntax
Route::get('/about', function () {
    return view('pages.about');
});

//Doing it dynamically
Route::get('/users/{id}', function ($id) {
    return $id;
});

//Doing it by controller
Route::get('/index', 'PagesController@index');

Route::get('/services', 'PagesController@services');
