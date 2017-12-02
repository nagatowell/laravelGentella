<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProdutoController extends Controller
{
    public function criarProduto(){
        return view("produto.cadastro");
    }

    public function listarProduto(){
        $produtos = \App\Produtos::get();
        return view("produto.index", ['produtos' => $produtos]);
    }

    public function criaProduto(Request $request){
        $produto = new \App\Produtos();
        $produto->nome = $request->nome;
        $produto->preco_unitario = floatval($request->preco);
        $produto->codigo = $request->codigo;
        $produto->quantidade = intval($request->quantidade);
        $produto->save();

        return redirect("produto");
    }

    public function deletarProduto($id){
        $produtos = \App\Produtos::where('_id', '=', $id)->first();
        $produtos->delete();

        return redirect("produto");
    }

    public function atualizarProduto($id){
        $produto = \App\Produtos::where('_id', '=', $id)->first();
        return view("produto.atualiza", ['produto' => $produto]);
    }

    public function atualizaProduto(Request $request){
        $produto = \App\Produtos::where('_id', '=', $request->id)->first();
        $produto->nome = $request->nome;
        $produto->preco_unitario = floatval($request->preco);
        $produto->codigo = $request->codigo;
        $produto->quantidade = intval($request->quantidade);
        $produto->save();

        return redirect("produto");
    }

    public function getComprar(){
        $produtos = \App\Produtos::where('quantidade', '>', 0)->get();
        return view("produto.compra", ['produtos' => $produtos]);
    }
    
    public function postComprar(Request $request){
        $produto = \App\Produtos::where('_id', '=', $request->produtoSelecionado)->first();
        $produto->quantidade -= 1;
        $produto->save();

        $pedido = new \App\Pedidos();
        $pedido->nome = $produto->nome;
        $pedido->quantidade = 1;
        $pedido->valor = $produto->preco_unitario;
        $pedido->data = date('d/m/Y');
        $pedido->save();
        return redirect('pedidos');
    }
}
