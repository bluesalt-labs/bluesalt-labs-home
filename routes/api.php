<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->as('api.')->namespace('Api')->group(function() {
    Route::apiResource('data-items', 'DataItemsController');
    Route::apiResource('data-item-types', 'DataItemTypesController');
    Route::apiResource('data-item-lists', 'DataItemListsController');
    Route::apiResource('notes', 'NotesController');
    Route::apiResource('tasks', 'TasksController');
    Route::apiResource('task-lists', 'TaskListsController');
});
