<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('conductor', 'App\Http\Controllers\ConductorController@getConductor');
Route::get('conductor/{id}', 'App\Http\Controllers\ConductorController@getConductorById');
Route::post('addConductor', 'App\Http\Controllers\ConductorController@insertConductor');
Route::put('editConductor/{id}', 'App\Http\Controllers\ConductorController@updateConductor');
Route::delete('deleteConductor/{id}', 'App\Http\Controllers\ConductorController@deleteConductor');

Route::get('vehiculos', 'App\Http\Controllers\VehiculoController@getVehiculos');
Route::get('vehiculo/{id}', 'App\Http\Controllers\VehiculoController@getVehiculoById');
Route::get('vehiculo/{id}', 'App\Http\Controllers\VehiculoController@getVehiculoById');
Route::post('addVehiculo', 'App\Http\Controllers\VehiculoController@insertVehiculo');
Route::put('editVehiculo/{id}', 'App\Http\Controllers\VehiculoController@updateVehiculo');
Route::delete('deleteVehiculo/{id}', 'App\Http\Controllers\VehiculoController@deleteVehiculo');
