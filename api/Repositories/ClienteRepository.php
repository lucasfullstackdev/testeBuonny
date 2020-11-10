<?php

namespace Repositories;

final class ClienteRepository extends BaseRepository
{

    protected $model = \App\Models\Cliente::class;
    protected $storeRules = [
        'nome' => 'required|string|max:255'
    ];
}
