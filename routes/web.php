<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::as('public.')->group(function() {
   Route::get('/', 'PublicController@home')->name('home');
   Route::get('about', 'PublicController@about')->name('about');
   Route::get('contact', 'PublicController@about')->name('contact');

   Route::as('blog.')->prefix('blog')->group(function() {
       Route::get('/', 'PublicController@blogIndex')->name('home');
   });

});

Auth::routes();

Route::get('/dashboard', 'DashboardController@index')->name('dashboard');
Route::get('/dashboard-new', 'DashboardController@index_new')->name('dashboard.new');

Route::middleware('auth')->prefix('static')->group(function() {
    Route::get('/', 'StaticController@index')->name('static.index');
    Route::get('{pagePath}', 'StaticController@get')->where('page', '.*')->name('static.get');
});

// Temp Routes
Route::middleware('auth')->group(function() {
    Route::as('data-items.')->prefix('data-items')->group(function() {
        Route::get('/', 'DataItemsController@showTypes')->name('show-types');
        //Route::resource('{type}', 'DataItemsController');

        Route::get('{type}', 'DataItemsController@index')->name('{type}.index');
        Route::get('{type}/create', 'DataItemsController@create')->name('{type}.create');
        Route::post('/', 'DataItemsController@store')->name('store');
        Route::delete('/{id}', 'DataItemsController@destroy')->name('destroy');


        // Routes not implemented from Resource route
        /*
|        | PUT|PATCH | data-items/{type}/{{type}}           | data-items.{type}.update  | App\Http\Controllers\DataItemsController@update                        | web,auth     |
|        | GET|HEAD  | data-items/{type}/{{type}}           | data-items.{type}.show    | App\Http\Controllers\DataItemsController@show                          | web,auth     |
|        | GET|HEAD  | data-items/{type}/{{type}}/edit      | data-items.{type}.edit    | App\Http\Controllers\DataItemsController@edit                          | web,auth     |
        */
    });

    Route::get('notes', 'VueRouterController@notes')->name('notes');
    Route::get('tasks', 'VueRouterController@tasks')->name('tasks');
    Route::get('data', 'VueRouterController@dataItems')->name('data-items');
});
