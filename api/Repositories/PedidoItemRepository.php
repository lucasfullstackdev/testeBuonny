<?php

namespace Repositories;

final class PedidoItemRepository extends BaseRepository
{

    protected $model = \App\Models\PedidoItem::class;
    protected $storeRules = [
        'produto_id' => 'required|exists:produto,id',
        'pedido_id' => 'required|exists:pedido,id',
        'quantidade' => 'required'
    ];
}
