<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Usuario;

class UsuarioController extends Controller
{
    public function create()
    {
        return view('site.registration');
    }

    public function store (Request $request)
    {
        Usuario::create([
            'nome' => $request->nome,
            'cpf' => $request->cpf,
            'telefone' => $request->telefone,
            'nascimento' => $request->nascimento,
            'email' => $request->email,
            'senha' => $request->senha,
        ]);

        return "Usuário Cadastrado com Sucesso!!!";
    }
}
