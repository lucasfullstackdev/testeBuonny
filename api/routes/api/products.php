<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Produto;

Route::get('/', [Produto::class, 'index']);
Route::post('/', [Produto::class, 'store']);
Route::get('/{id}', [Produto::class, 'show'])->where('id', '[0-9]+');
Route::put('/{id}', [Produto::class, 'update'])->where('id', '[0-9]+');
Route::delete('/{id}', [Produto::class, 'destroy'])->where('id', '[0-9]+');
