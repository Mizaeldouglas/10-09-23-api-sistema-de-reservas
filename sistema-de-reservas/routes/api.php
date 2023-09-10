<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HotelController;
use App\Http\Controllers\ReservaController;
use App\Http\Controllers\RestauranteController;
use App\Http\Controllers\SalaoDeBelezaController;


// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });



Route::group(['prefix' => 'v1'], function () {
    Route::apiResource('restaurantes', RestauranteController::class);
    Route::apiResource('reservas', ReservaController::class);
    Route::apiResource('hoteis', HotelController::class);
    Route::apiResource('saloes-de-beleza', SalaoDeBelezaController::class);
});
