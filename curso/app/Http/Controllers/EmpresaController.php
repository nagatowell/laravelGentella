<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EmpresaController extends Controller
{
    public function cadastraEmpresa(Request $request){
        $nome = $request->nome;
        $email = $request->email;

        $empresa = [
            'company_name' => $nome,
            'company_email' => $email
        ];

        $empresa = json_encode($empresa);
        
        $url = "localhost:8000/api/company";
        \App\Helper\WebRequest::postData($url, $empresa);
    }

}
