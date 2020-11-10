<?php

namespace Database\Seeders;

final class PedidoItemSeeder extends BaseSeeder
{
    protected $model = \App\Models\PedidoItem::class;
    protected $collection = [
        ['pedido_id' => 1, 'produto_id' => 1, 'quantidade' => 10],
        ['pedido_id' => 1, 'produto_id' => 4, 'quantidade' => 5],
        ['pedido_id' => 2, 'produto_id' => 1, 'quantidade' => 6],
        ['pedido_id' => 2, 'produto_id' => 3, 'quantidade' => 10],
        ['pedido_id' => 2, 'produto_id' => 6, 'quantidade' => 20]
    ];
}
