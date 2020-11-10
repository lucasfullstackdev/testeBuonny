<?php

namespace App\Models;

final class Cliente extends BaseModel
{
    protected $table = 'cliente';
    protected $fillable = ['nome'];
}
