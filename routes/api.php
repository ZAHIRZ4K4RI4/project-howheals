<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\CustomerController;
use App\Http\Controllers\Api\TransaksiController;
use App\Http\Controllers\Api\PelayananController;
// use App\Http\Controllers\Api\UserController;
use App\Http\Controllers\Api\AuthController;

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

Route::post('/customer',[customerController::class, 'store']);
Route::post('/transaksi',[transaksiController::class, 'store']);
Route::post('/pelayanan',[pelayananController::class, 'store']);

// Route::post('register',[UserController::class, 'register']);
Route::post('register',[AuthController::class, 'register']);
Route::post('login',[AuthController::class, 'login']);