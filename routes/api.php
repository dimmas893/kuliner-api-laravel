<?php

use App\Http\Controllers\keranjangController;
use App\Http\Controllers\PesananController;
use App\Http\Controllers\ProductController;
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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/products', [ProductController::class, 'all']);
Route::get('/best-products', [ProductController::class, 'bestseller']);
Route::get('/products/{id}', [ProductController::class, 'detail']);


Route::get('/keranjangs', [keranjangController::class, 'all']);
Route::post('/keranjangs', [keranjangController::class, 'post']);
Route::delete('/keranjangs/{id}', [keranjangController::class, 'delete']);

Route::post('/pesanans', [PesananController::class, 'post']);
