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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/content', 'ContentController@index')->name('content');
Route::get('/content/{id}', 'ContentController@show')->name('single_content');
Route::post('/content', 'ContentController@create')->name('new_content');
Route::put('/content/{id}', 'ContentController@update')->name('update_content');
Route::delete('/content/{id}', 'ContentController@delete')->name('delete_content');