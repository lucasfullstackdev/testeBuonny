<?php

namespace Repositories;

final class PedidoRepository extends BaseRepository
{

    protected $model = \App\Models\Pedido::class;
    protected $storeRules = [
        'cliente_id' => 'required|exists:cliente,id'
    ];
}
