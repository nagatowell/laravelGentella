<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UsuariosController extends Controller
{
    public function index(){
        $usuario = \App\User::get();
        return view('usuario.index', ['usuarios' => $usuario]);
        return $usuario;

    }
    public function criarUsuario(){
        return view('usuario.cadastro');
    //,
    }
    public function criaUsuario(Request $request){
        $usuario = new \App\User();
        $usuario->name = $request ->nome;
        $usuario->email= $request ->email;
        $usuario->password = $request ->senha;
        $usuario->save();
        return redirect('/users');

    }
}
