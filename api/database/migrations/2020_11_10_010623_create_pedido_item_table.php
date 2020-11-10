<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePedidoItemTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pedido_item', function (Blueprint $table) {
            $table->increments('id');

            $table->integer('produto_id')->index('pedido_item_FKIndex1')->unsigned();
            $table->foreign('produto_id')->references('id')->on('produto');

            $table->integer('pedido_id')->index('pedido_item_FKIndex2')->unsigned();
            $table->foreign('pedido_id')->references('id')->on('pedido');

            $table->integer('quantidade')->unsigned();

            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pedido_item');
    }
}
