<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\API\AuthController;
use App\Http\Controllers\API\OrderController;
use App\Http\Controllers\API\PemesananController as APIPemesananController;
use App\Http\Controllers\API\UserController;
use App\Http\Controllers\PemesananController;

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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::post('login', [AuthController::class, 'login']);
Route::post('register', [AuthController::class, 'register']);
Route::get('data', [OrderController::class, 'index']);
Route::get('data/{id}', [OrderController::class, 'details']);
Route::post('order', [OrderController::class, 'store']);
Route::get('user', [UserController::class, 'index']);
Route::get('userdata/{id}', [UserController::class, 'getdata']);
Route::post('user-update', [UserController::class, 'update']);
Route::post('/midtrans-callback', [PemesananController::class, 'callback']);
Route::get('riwayat', [OrderController::class, 'riwayat']);