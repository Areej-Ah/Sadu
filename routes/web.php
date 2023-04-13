<?php

use Illuminate\Support\Facades\Route;


Route::group(['middleware' => 'Maintenance'], function () {
    
    Route::get('/', function () {
        return view('frontend.home');
    });

});


Route::get('maintenance', function () {

    if (setting()->status == 'open')
    {
     return redirect ('/');
    }

    return view('frontend.maintenance');
});
