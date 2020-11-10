<?php

namespace App\Models;

final class PedidoItem extends BaseModel
{
    protected $table = 'pedido_item';
    protected $fillable = ['produto_id', 'pedido_id', 'quantidade'];
}
