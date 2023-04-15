<?php

use Illuminate\Support\Facades\Route;

Route::group(['prefix'=>'admin','namespace'=>'Admin'], function() {

    Config::set('auth.defines','admin');

    Route::get('login','AdminController@login');
    Route::post('login','AdminController@check');
    Route::get('forgot/password','AdminController@forgot_password');
    Route::post('forgot/password','AdminController@send_password');
    Route::get('reset/password/{token}','AdminController@reset_password');
    Route::post('reset/password/{token}','AdminController@reset_password_done');

    Route::group(['middleware'=>'admin:admin'],function() {

        Route::resource('admin','AdminController');
        Route::delete('admin/destroy/all','AdminController@multi_delete');

        Route::resource('users','UsersController');
        Route::delete('users/destroy/all','UsersController@multi_delete');

        Route::resource('countries','CountriesController');
        Route::delete('countries/destroy/all','CountriesController@multi_delete');


        Route::resource('brands','BrandsController');
        Route::delete('brands/destroy/all','BrandsController@multi_delete');

        Route::resource('services','ServicesController');
        Route::delete('services/destroy/all','ServicesController@multi_delete');


        Route::resource('investments','InvestmentsController');
        Route::delete('investments/destroy/all','InvestmentsController@multi_delete');

        Route::resource('social_media','SocialMediaController');
        Route::delete('social_media/destroy/all','SocialMediaController@multi_delete');

        Route::resource('news','NewsController');
        Route::delete('news/destroy/all','NewsController@multi_delete');


        Route::resource('customers','CustomersController');
        Route::delete('customers/destroy/all','CustomersController@multi_delete');


        Route::resource('factories','FactoriesController');
        Route::delete('factories/destroy/all','FactoriesController@multi_delete');

        Route::resource('malls','MallsController');
        Route::delete('malls/destroy/all','MallsController@multi_delete');


        Route::resource('shippings','ShippingsController');
        Route::delete('shippings/destroy/all','ShippingsController@multi_delete');


        Route::resource('cities','CitiesController');
        Route::delete('cities/destroy/all','CitiesController@multi_delete');


        Route::resource('attribute_families','AttributeFamiliesController');
        Route::delete('attribute_families/destroy/all','AttributeFamiliesController@multi_delete');


        Route::resource('attributes','AttributesController');
        Route::delete('attributes/destroy/all','AttributesController@multi_delete');


        Route::resource('attribute_options','AttributeOptionsController');
        Route::delete('attribute_options/destroy/all','AttributeOptionsController@multi_delete');


        Route::resource('states','StatesController');
        Route::delete('states/destroy/all','StatesController@multi_delete');


        Route::resource('categories','CategoriesController');


        Route::get('/', function () {
            return view('admin.home');
        });

        Route::get('settings', 'SettingsController@setting');
		Route::post('settings', 'SettingsController@setting_save');

        Route::any('logout','AdminController@logout');


    });

    Route::get('lang/{lang}',function($lang){

        session()->has('lang') ?session()->forget('lang') :'';
        $lang == 'ar' ?session()->put('lang','ar'): session()->put('lang','en');

        return back();

    });


});


