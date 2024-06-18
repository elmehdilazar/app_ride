<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\CarsController;
use App\Http\Controllers\DriversController;
use App\Http\Controllers\GaragesController;
use App\Http\Controllers\LocationsController;
use App\Http\Controllers\UserController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;


/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/
Route::get('/garages', [GaragesController::class, 'index']);
Route::get('/garages/{id}', [GaragesController::class, 'show']);
Route::get('/drivers', [DriversController::class, 'index']);
Route::get('/drivers/{id}', [DriversController::class, 'show']);
Route::middleware(['auth:sanctum'])->group(function () {

    Route::apiResource('cars', CarsController::class);
    Route::apiResource('locations', LocationsController::class);
    Route::apiResource("drivers",DriversController::class)->except(['index', 'show']);
    Route::apiResource("User",  UserController::class);
    Route::apiResource('garages', GaragesController::class)->except(['index', 'show']);
});
Route::post('/register', [AuthController::class, 'register']);
Route::post('/login', [AuthController::class, 'login']);
Route::post('/logout', [AuthController::class, 'logout'])->middleware('auth:sanctum');
