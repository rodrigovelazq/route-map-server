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
Route::post('auth/register', 'AuthController@register');
Route::post('auth/login', 'AuthController@authenticate');
Route::post('auth/refresh', 'AuthController@refresh');

Route::group(['middleware' => ['jwt.verify']], function() {
    Route::get('auth/user', 'AuthController@getAuthenticatedUser');
    Route::resource('persona', 'PersonaController');
});
