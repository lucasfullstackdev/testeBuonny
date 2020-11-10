<?php

namespace App\Models;

final class PedidoItem extends BaseModel
{
    protected $table = 'pedido_item';
    protected $fillable = ['produto_id', 'pedido_id', 'quantidade'];
    protected $with = ['products'];

    public function products()
    {
        return $this->belongsTo(Produto::class, 'produto_id');
    }
}
