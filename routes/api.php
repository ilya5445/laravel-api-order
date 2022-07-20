<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

Route::get('orders', "App\Http\Controllers\OrderController@index"); // List Posts
Route::post('orders', "App\Http\Controllers\OrderController@store"); // Create Post
Route::get('orders/{id}', "App\Http\Controllers\OrderController@show"); // Detail of Post
Route::put('orders/{id}', "App\Http\Controllers\OrderController@update"); // Update Post
Route::delete('orders/{id}', "App\Http\Controllers\OrderController@destroy"); // Delete Post