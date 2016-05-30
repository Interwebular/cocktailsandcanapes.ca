<?php

// Admin Routes
Route::group([
    'middleware' => ['web', 'auth'],
    'namespace' => 'Admin',
    'prefix' => 'admin'
], function () {

    Route::get('/', ['as' => 'admin.index', 'uses' => 'AdminController@index']);

    Route::get('users', ['as' => 'admin.users.index', 'uses' => 'UserController@index']);
    Route::get('users/create', ['as' => 'admin.users.create', 'uses' => 'UserController@create']);
    Route::post('users/create', ['as' => 'admin.users.store', 'uses' => 'UserController@store']);

    Route::get('me', ['as' => 'admin.users.me', 'uses' => 'UserController@me']);
    Route::post('me', ['as' => 'admin.users.me.post', 'uses' => 'UserController@postMe']);

    // Menus -- MenuController
    Route::get('menus', ['as' => 'admin.menus.index', 'uses' => 'MenuController@index']);
    Route::get('menus/create', ['as' => 'admin.menus.create', 'uses' => 'MenuController@create']);
    Route::post('menus/create', ['as' => 'admin.menus.store', 'uses' => 'MenuController@store']);
    Route::get('menus/{menu}/edit', ['as' => 'admin.menus.edit', 'uses' => 'MenuController@edit']);
    Route::put('menus/{menu}/edit', ['as' => 'admin.menus.save', 'uses' => 'MenuController@save']);

    // Menus -- MealController
    Route::get('menus/{menu}', ['as' => 'admin.menus.show', 'uses' => 'MenuController@show']);
    Route::get('menus/{menu}/categories/{category}/meals/create', ['as' => 'admin.menus.categories.meals.create', 'uses' => 'MealController@create']);
    Route::post('menus/{menu}/categories/{category}/meals/create', ['as' => 'admin.menus.categories.meals.store', 'uses' => 'MealController@store']);
    Route::get('menus/{menu}/meals/create', ['as' => 'admin.menus.meals.create', 'uses' => 'MealController@create']);
    Route::post('menus/{menu}/meals/create', ['as' => 'admin.menus.meals.store', 'uses' => 'MealController@store']);
    Route::get('menus/{menu}/meals/{meal}/edit', ['as' => 'admin.menus.meals.edit', 'uses' => 'MealController@edit']);
    Route::put('menus/{menu}/meals/{meal}/edit', ['as' => 'admin.menus.meals.save', 'uses' => 'MealController@save']);
    Route::delete('menus/{menu}/meals/{meal}/delete', ['as' => 'admin.menus.meals.delete', 'uses' => 'MealController@destroy']);

    // Menus -- CategoryController
    Route::get('menus/{menu}/categories/create', ['as' => 'admin.menus.categories.create', 'uses' => 'CategoryController@create']);
    Route::post('menus/{menu}/categories/create', ['as' => 'admin.menus.categories.store', 'uses' => 'CategoryController@store']);
    Route::get('menus/{menu}/categories/{category}/edit', ['as' => 'admin.menus.categories.edit', 'uses' => 'CategoryController@edit']);
    Route::put('menus/{menu}/categories/{category}/edit', ['as' => 'admin.menus.categories.save', 'uses' => 'CategoryController@save']);
    Route::delete('menus/{menu}/categories/{category}/delete', ['as' => 'admin.menus.categories.destroy', 'uses' => 'CategoryController@destroy']);



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

    Route::get('testimonials', ['as' => 'admin.testimonials.index', 'uses' => 'TestimonialController@index']);
    Route::get('testimonials/create', ['as' => 'admin.testimonials.create', 'uses' => 'TestimonialController@create']);
    Route::post('testimonials/create', ['as' => 'admin.testimonials.store', 'uses' => 'TestimonialController@store']);
    Route::get('testimonials/{testimonial}', ['as' => 'admin.testimonials.edit', 'uses' => 'TestimonialController@edit']);
    Route::put('testimonials/{testimonial}', ['as' => 'admin.testimonials.save', 'uses' => 'TestimonialController@save']);

    Route::get('categories', ['as' => 'admin.categories.index', 'uses' => 'CategoryController@index']);
    Route::get('categories/create', ['as' => 'admin.categories.create', 'uses' => 'CategoryController@create']);
    Route::post('categories/create', ['as' => 'admin.categories.store', 'uses' => 'CategoryController@store']);
    Route::get('categories/{category}/edit', ['as' => 'admin.categories.edit', 'uses' => 'CategoryController@edit']);
    Route::put('categories/{category}/edit', ['as' => 'admin.categories.save', 'uses' => 'CategoryController@save']);

    Route::get('gallery', ['as' => 'admin.gallery.index', 'uses' => 'GalleryController@index']);
    Route::get('gallery/upload', ['as' => 'admin.gallery.create', 'uses' => 'GalleryController@create']);
    Route::get('gallery/{image}/edit', ['as' => 'admin.gallery.edit', 'uses' => 'GalleryController@edit']);
    Route::put('gallery/{image}/edit', ['as' => 'admin.gallery.save', 'uses' => 'GalleryController@save']);
    Route::post('gallery/upload', ['as' => 'admin.gallery.store', 'uses' => 'GalleryController@store']);
    Route::delete('gallery/{image}', ['as' => 'admin.gallery.destroy', 'uses' => 'GalleryController@destroy']);

});

// Public Routes
Route::group(['middleware' => ['web']], function () {

    Route::auth();

    Route::get('event-catering-menus/{menu?}', ['as' => 'menus.show', 'uses' => 'MenuController@show']);
    Route::get('wedding-catering-menus/{menu?}', ['as' => 'wedding.menus.show', 'uses' => 'MenuController@showWedding']);
    Route::get('menus/{menu}/pdf', ['as' => 'menus.pdf', 'uses' => 'MenuController@pdf']);

    Route::get('/', ['as' => 'page.home', 'uses' => 'HomeController@index']);

    Route::get('news', ['as' => 'blog.index', 'uses' => 'BlogController@index']);
    Route::get('news/{slug}', ['as' => 'blog.post', 'uses' => 'BlogController@show']);

    Route::get('vancouver-wedding-caterers', ['as' => 'weddings.index', 'uses' => 'PageController@weddings']);
    Route::get('find-the-perfect-venue', ['as' => 'venues.index', 'uses' => 'VenueController@index']);
    Route::get('find-the-perfect-venue/{venue}/{name?}', ['as' => 'venues.show', 'uses' => 'VenueController@show']);
    Route::get('venues/submit', ['as' => 'venues.submit', 'uses' => 'VenueController@submit']);
    Route::post('venues/submit', ['as' => 'venues.postSubmit', 'uses' => 'VenueController@postSubmit']);
    Route::get('contact', ['as' => 'contact.index', 'uses' => 'PageController@contact']);
    Route::post('contact', ['as' => 'contact.submit', 'uses' => 'PageController@postContact']);
    Route::get('gallery', ['as' => 'gallery.index', 'uses' => 'PageController@gallery']);
    Route::get('privacy-policy', ['as' => 'legal.pp', 'uses' => 'PageController@privacy']);
    Route::get('disclaimer', ['as' => 'legal.disclaimer', 'uses' => 'PageController@disclaimer']);

    Route::get('deightoncup', 'PageController@DeightonCup');

    Route::get('landing/wedding-catering', 'LandingController@wedding');
    Route::get('landing/corporate-event-catering', 'LandingController@events');
    Route::get('landing/lunch-catering', 'LandingController@lunch');
});
