<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Cliente;

Route::get('/', [Cliente::class, 'index']);
Route::post('/', [Cliente::class, 'store']);
Route::get('/{id}', [Cliente::class, 'show'])->where('id', '[0-9]+');
Route::put('/{id}', [Cliente::class, 'update'])->where('id', '[0-9]+');
Route::delete('/{id}', [Cliente::class, 'destroy'])->where('id', '[0-9]+');
