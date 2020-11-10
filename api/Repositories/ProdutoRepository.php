<?php

namespace Repositories;

final class ProdutoRepository extends BaseRepository
{

    protected $model = \App\Models\Produto::class;
    protected $storeRules = [
        'descricao' => 'required|string|max:255',
        'preco' => 'required'
    ];
}
