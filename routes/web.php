<?php

use Illuminate\Support\Facades\Route;


Route::group(['middleware' => 'Maintenance'], function () {
    
    Route::get('/', 'PagesController@home');
    Route::get('/about', 'PagesController@about');

});


Route::get('maintenance', function () {

    if (setting()->status == 'open')
    {
     return redirect ('/');
    }

    return view('frontend.maintenance');
});
