<?php

namespace App\Models;

final class Produto extends BaseModel
{
    protected $table = 'produto';
    protected $fillable = ['descricao', 'preco'];
}
