<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Repositories\PedidoItemRepository;
use Repositories\PedidoRepository;

class PedidoItem extends Controller
{
    /** @var PedidoRepository */
    private $pedidoRepository;

    /** @var PedidoItemRepository */
    private $pedidoItemRepository;

    public function __construct(
        PedidoRepository $pedidoRepository,
        PedidoItemRepository $pedidoItemRepository
    ) {
        $this->pedidoRepository = $pedidoRepository;
        $this->pedidoItemRepository = $pedidoItemRepository;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($id)
    {
        $pedido = $this->pedidoRepository->find($id)->show();
        return $pedido->items;
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        return $this->pedidoItemRepository->create($request->all());
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id, $item_id)
    {
        $pedido = $this->pedidoRepository->find($id)->show()->toArray();

        return array_values(array_filter($pedido['items'], function ($item) use ($item_id) {
            return $item['id'] == $item_id;
        }));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        return $this->pedidoItemRepository->find($id)->update($request->all());
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        return $this->pedidoItemRepository->find($id)->delete();
    }
}
