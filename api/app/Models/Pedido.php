<?php

namespace App\Models;

final class Pedido extends BaseModel
{
    protected $table = 'pedido';
    protected $fillable = ['cliente_id'];
    protected $with = ['items.products'];

    public function items()
    {
        return $this->hasMany(PedidoItem::class, 'pedido_id');
    }
}
