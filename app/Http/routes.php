<?php

// Admin Routes
Route::group([
    //'middleware' => ['auth', 'web'],
    'middleware' => ['web', 'auth'],
    'namespace' => 'Admin',
    'prefix' => 'admin'
], function () {

    Route::get('/', ['as' => 'admin.index', 'uses' => 'AdminController@index']);

    Route::get('users', ['as' => 'admin.users.index', 'uses' => 'UserController@index']);
    Route::get('users/create', ['as' => 'admin.users.create', 'uses' => 'UserController@create']);
    Route::post('users/create', ['as' => 'admin.users.store', 'uses' => 'UserController@store']);

    Route::get('menus', ['as' => 'admin.menus.index', 'uses' => 'MenuController@index']);
    Route::get('menus/create', ['as' => 'admin.menus.create', 'uses' => 'MenuController@create']);
    Route::post('menus/create', ['as' => 'admin.menus.store', 'uses' => 'MenuController@store']);
    Route::get('menus/{menu}/edit', ['as' => 'admin.menus.edit', 'uses' => 'MenuController@edit']);
    Route::put('menus/{menu}/edit', ['as' => 'admin.menus.save', 'uses' => 'MenuController@save']);

    Route::get('meals', ['as' => 'admin.meals.index', 'uses' => 'MealController@index']);
    Route::get('meals/create', ['as' => 'admin.meals.create', 'uses' => 'MealController@create']);
    Route::post('meals/create', ['as' => 'admin.meals.store', 'uses' => 'MealController@store']);
    Route::get('meals/{meal}/edit', ['as' => 'admin.meals.edit', 'uses' => 'MealController@edit']);
    Route::put('meals/{meal}/edit', ['as' => 'admin.meals.save', 'uses' => 'MealController@save']);

    Route::get('venues', ['as' => 'admin.venues.index', 'uses' => 'VenueController@index']);
    Route::get('venues/create', ['as' => 'admin.venues.create', 'uses' => 'VenueController@create']);
    Route::post('venues/create', ['as' => 'admin.venues.store', 'uses' => 'VenueController@store']);
    Route::get('venues/{venue}/edit', ['as' => 'admin.venues.edit', 'uses' => 'VenueController@edit']);
    Route::put('venues/{venue}/edit', ['as' => 'admin.venues.save', 'uses' => 'VenueController@save']);

    Route::get('blog', ['as' => 'admin.blog.index', 'uses' => 'BlogController@index']);
    Route::get('blog/create', ['as' => 'admin.blog.create', 'uses' => 'BlogController@create']);
    Route::post('blog/create', ['as' => 'admin.blog.store', 'uses' => 'BlogController@store']);
    Route::get('blog/{post}', ['as' => 'admin.blog.edit', 'uses' => 'BlogController@edit']);
    Route::put('blog/{post}', ['as' => 'admin.blog.save', 'uses' => 'BlogController@save']);



});

// Public Routes
Route::group(['middleware' => ['web']], function () {

    Route::auth();

    Route::get('menus/{menu?}', ['as' => 'menus.show', 'uses' => 'MenuController@show']);

    Route::get('/', ['as' => 'page.home', 'uses' => 'HomeController@index']);


});
