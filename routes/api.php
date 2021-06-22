<?php

use App\Http\Controllers\Api\UserController;
use App\Http\Controllers\AuthController;
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

Route::group([

    'middleware' => 'api',
    'prefix' => 'auth'

], function ($router) {

    Route::post('login', [AuthController::class, 'login']);
    Route::post('logout', [AuthController::class, 'logout']);
    Route::post('refresh', [AuthController::class, 'refresh']);
    Route::post('me', [AuthController::class, 'me']);
    Route::post('register', [AuthController::class, 'register']);

});


Route::group(['middleware' => 'JWT', 'prefix' => 'user'], function (){
    Route::get('/', [UserController::class, 'index']);
    Route::get('/{id}', [UserController::class, 'getInfoUser']);
    Route::delete('/delete/{id}', [UserController::class, 'delete']);

});

Route::post('/check-exist-email', [UserController::class, 'checkExistEmail']);
