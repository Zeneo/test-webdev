<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
//    return csrf_token();
    return view('instructions');
});
Route::get('/users',  [\App\Http\Controllers\UserController::class, 'index']);
Route::get('/users/{id}',  [\App\Http\Controllers\UserController::class, 'single']);
//Route::get('/token',  [\App\Http\Controllers\UserController::class, 'token']);    // Uncomment when token is needed
Route::controller(\App\Http\Controllers\UserController::class)->group(function () {
    Route::post('/users',  [\App\Http\Controllers\UserController::class, 'create']);
    Route::put('/users/{id}',  [\App\Http\Controllers\UserController::class, 'update']);
    Route::delete('/users/{id}',  [\App\Http\Controllers\UserController::class, 'delete']);
});

