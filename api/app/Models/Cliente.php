<?php

namespace App\Models;

final class Cliente extends BaseModel
{
    protected $table = 'cliente';
    protected $fillable = ['nome'];
    protected $with = ['orders.items.products'];

    public function orders()
    {
        return $this->hasMany(Pedido::class, 'cliente_id');
    }
}
