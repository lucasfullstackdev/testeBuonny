<?php

namespace Database\Seeders;

final class ClienteSeeder extends BaseSeeder
{
    protected $model = \App\Models\Cliente::class;
    protected $collection = [
        ['nome' => 'Lojas Americanas'],
        ['nome' => 'Casas Bahia'],
        ['nome' => 'Fast Shop'],
        ['nome' => 'Nivalmix'],
        ['nome' => 'Mais Valdir'],
        ['nome' => 'Ponto Frio'],
        ['nome' => 'Magazine Luiza']
    ];
}
