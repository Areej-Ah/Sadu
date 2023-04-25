<?php

use Illuminate\Support\Facades\Route;


Route::group(['middleware' => 'Maintenance'], function () {

    Route::get('/', 'PagesController@home');
    Route::get('/about', 'PagesController@about');
    Route::get('/services', 'PagesController@services');
    Route::get('/service/{id}/', 'PagesController@service');
    Route::get('/news', 'PagesController@news');
    Route::get('/new/{id}/', 'PagesController@new');
    Route::get('/clients', 'PagesController@clients');
    Route::get('/contact', 'PagesController@contact');

});


Route::get('maintenance', function () {

    if (setting()->status == 'open')
    {
     return redirect ('/');
    }

    return view('frontend.maintenance');
});

