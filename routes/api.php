<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
Use App\Blog;
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

Route::get('blog', 'BlogController@index');
Route::get('blog/{blog}', 'BlogController@show');
Route::post('blog', 'BlogController@store');
Route::put('blog/{blog}', 'BlogController@update');
Route::delete('blog/{blog}', 'BlogController@delete');