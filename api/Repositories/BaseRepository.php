<?php

namespace Repositories;

use Illuminate\Support\Facades\Validator;

abstract class BaseRepository
{
    private $finded;
    protected $updateRules;

    public function __construct()
    {
        if (empty($this->updateRules)) {
            $this->updateRules = $this->storeRules;
        }
    }

    public final function all()
    {
        return $this->model::get();
    }

    public final function find($id)
    {
        $this->finded = $this->model::find($id);
        return $this;
    }

    public final function show()
    {
        return $this->finded;
    }

    public final function delete()
    {
        return $this->finded->delete();
    }

    public final function create($collection)
    {
        $validator = Validator::make($collection, $this->storeRules);

        if ($validator->fails()) {
            return $validator->errors();
        }

        return $this->model::create($collection);
    }

    public final function update($collection)
    {
        $validator = Validator::make($collection, $this->storeRules);

        if ($validator->fails()) {
            return $validator->errors();
        }

        return $this->finded->update($collection);
    }
}
