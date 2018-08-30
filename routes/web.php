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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/dashboard', 'DashboardController@index')->name('dashboard');

Route::middleware('auth')->prefix('static')->group(function() {
    Route::get('/', 'StaticController@index')->name('static.index');
    Route::get('{pagePath}', 'StaticController@get')->where('page', '.*')->name('static.get');
});

// Temp Routes
Route::middleware('auth')->group(function() {
    Route::resource('data-items', 'DataItemsController');

    Route::get('notes', 'VueRouterController@notes')->name('notes');
    Route::get('tasks', 'VueRouterController@tasks')->name('tasks');
    Route::get('data', 'VueRouterController@dataItems')->name('data-items');
});
