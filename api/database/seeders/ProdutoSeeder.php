<?php

namespace Database\Seeders;

final class ProdutoSeeder extends BaseSeeder
{
    protected $model = \App\Models\Produto::class;
    protected $collection = [
        ['descricao' => 'TV', 'preco' => 1500.00],
        ['descricao' => 'Micro-Ondas', 'preco' => 400.00],
        ['descricao' => 'DVD Player', 'preco' => 150.00],
        ['descricao' => 'Notebook', 'preco' => 2000.00],
        ['descricao' => 'All-In-One', 'preco' => 1500.00],
        ['descricao' => 'Smartphone', 'preco' => 1000.00],
        ['descricao' => 'Micro-System', 'preco' => 800.00]
    ];
}
