<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\api\v1\VehicleController;
use App\Http\Controllers\api\v1\ParkingController;


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

Route::get('conductor', 'App\Http\Controllers\ConductorController@getConductor');
Route::get('conductor/{id}', 'App\Http\Controllers\ConductorController@getConductorById');
Route::post('addConductor', 'App\Http\Controllers\ConductorController@insertConductor');
Route::put('editConductor/{id}', 'App\Http\Controllers\ConductorController@updateConductor');
Route::delete('deleteConductor/{id}', 'App\Http\Controllers\ConductorController@deleteConductor');
