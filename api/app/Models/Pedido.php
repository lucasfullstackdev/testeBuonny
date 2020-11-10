<?php

namespace App\Models;

final class Pedido extends BaseModel
{
    protected $table = 'pedido';
    protected $fillable = ['cliente_id'];
}
