<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Pedido;
use App\Http\Controllers\PedidoItem;

Route::get('/', [Pedido::class, 'index']);
Route::post('/', [Pedido::class, 'store']);
Route::get('/{id}', [Pedido::class, 'show'])->where('id', '[0-9]+');
Route::put('/{id}', [Pedido::class, 'update'])->where('id', '[0-9]+');
Route::delete('/{id}', [Pedido::class, 'destroy'])->where('id', '[0-9]+');

Route::get('/{id}/items', [PedidoItem::class, 'index'])->where('id', '[0-9]+');
Route::post('/items', [PedidoItem::class, 'store']);
Route::get('/{id}/items/{item_id}', [PedidoItem::class, 'show'])->where(['id', '[0-9]+'], ['item_id', '[0-9]+']);
Route::put('/items/{item_id}', [PedidoItem::class, 'update'])->where(['item_id', '[0-9]+']);
Route::delete('/items/{item_id}', [PedidoItem::class, 'destroy'])->where(['item_id', '[0-9]+']);
