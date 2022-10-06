<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;



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

Route::get('parqueaderos', 'App\Http\Controllers\ParqueaderoController@getParqueadero');
Route::get('parqueadero/{lote}', 'App\Http\Controllers\ParqueaderoController@getParqueaderoByLote');
Route::put('setVehiculo/{id}', 'App\Http\Controllers\ParqueaderoController@setVehiculo');
Route::put('removeVehiculo/{id}', 'App\Http\Controllers\ParqueaderoController@removeVehiculo');
Route::get('parqueoLibre', 'App\Http\Controllers\ParqueaderoController@getParqueoLibre');
Route::get('estadisticas', 'App\Http\Controllers\ParqueaderoController@estadisticas');
Route::get('producido', 'App\Http\Controllers\ParqueaderoController@producido');

Route::middleware(['auth:sanctum'])->group(function() {
    Route::post('/v1/logout',
    [App\Http\Controllers\api\v1\AuthController::class,
    'logout'])->name('api.logout');
   });

