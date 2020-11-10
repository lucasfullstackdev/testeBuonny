<?php

namespace Repositories;

use Illuminate\Support\Facades\Validator;

abstract class BaseRepository
{
    protected $updateRules;
    private $finded;
    private $validator;

    public function __construct()
    {
        if (empty($this->updateRules)) {
            $this->updateRules = $this->storeRules;
        }
    }

    public final function all()
    {
        try {
            $collection = $this->model::get();
            return Response::success($collection, 'Registros encontrados');
        } catch (\Throwable $th) {
            return Response::error($th, $th->getMessage());
        }
    }

    public final function find($id)
    {
        try {
            $this->finded = $this->model::findOrFail($id);
            $this->finded = Response::success($this->finded, 'Registro encontrado');
        } catch (\Throwable $th) {
            $this->finded = Response::error($th, $th->getMessage());
        }
        return $this;
    }

    public final function show()
    {
        return $this->finded;
    }

    public final function delete()
    {
        if ($this->finded['code'] != 200) {
            return $this->finded;
        }

        return $this->finded['data']->delete();
    }

    public final function create($collection)
    {
        try {
            if ($this->collectionIsInvalid($collection))
                return Response::error($collection, $this->validator->errors());

            $created = $this->model::create($collection);
            return Response::success($created, 'Registro salvo com sucesso!');
        } catch (\Throwable $th) {
            return Response::error($th, $th->getMessage());
        }
    }

    public final function update($collection)
    {
        try {
            if ($this->collectionIsInvalid($collection))
                return Response::error($collection, $this->validator->errors());

            $this->finded['data']->update($collection);
            return Response::success($collection, 'Registro salvo com sucesso!');
        } catch (\Throwable $th) {
            return Response::error($th, $th->getMessage());
        }
    }

    private function collectionIsInvalid($collection)
    {
        $this->validator = Validator::make($collection, $this->storeRules);
        return $this->validator->fails();
    }
}
