<?php

use App\Models\Produto;
use Illuminate\Support\Facades\Route;
use Repositories\Teste;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    $teste = new Teste();

    return $teste->print();
});
