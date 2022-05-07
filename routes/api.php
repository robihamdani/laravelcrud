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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::post('siswa', 'App\Http\Controllers\SiswaController@create');
Route::get('halo', 'App\Http\Controllers\SiswaController@welcome');
Route::get('/siswa/{id}', 'App\Http\Controllers\SiswaController@getbyid');
Route::get('siswa', 'App\Http\Controllers\SiswaController@getall');
Route::delete('/siswa/{id}', 'App\Http\Controllers\SiswaController@delete');
Route::put('/siswa/{id}', 'App\Http\Controllers\SiswaController@update');
