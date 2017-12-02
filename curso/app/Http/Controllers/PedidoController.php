<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PedidoController extends Controller
{
    public function listarPedidos(){
        $pedidos = \App\Pedidos::get();

        $valorTotal = 0;

        foreach ($pedidos as $pedido){
            $valorTotal += $pedido->valor;
        }

        return view('pedido.index', 
        ['pedidos' => $pedidos, 'valor_total' => $valorTotal]);
    }

}
