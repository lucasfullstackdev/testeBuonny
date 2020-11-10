<?php

namespace Database\Seeders;

final class PedidoSeeder extends BaseSeeder
{
    protected $model = \App\Models\Pedido::class;
    protected $collection = [
        ['cliente_id' => 1],
        ['cliente_id' => 2]
    ];
}
