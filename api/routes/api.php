<?php

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

Route::prefix('clients')->group(realpath(__DIR__ . '/api/clients.php'));
Route::prefix('products')->group(realpath(__DIR__ . '/api/products.php'));
Route::prefix('orders')->group(realpath(__DIR__ . '/api/orders.php'));
