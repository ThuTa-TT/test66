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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::post('/test/dep-all',[App\Http\Controllers\Api\AssignController::class,"depAll"]);

Route::post('/test/assign-search',[App\Http\Controllers\Api\AssignController::class,"assignSearch"]);
Route::post('/test/emp-assign',[App\Http\Controllers\Api\AssignController::class,"empAssign"]);

