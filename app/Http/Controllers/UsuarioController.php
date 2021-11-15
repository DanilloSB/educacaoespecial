<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Usuarios;

class UsuarioController extends Controller
{
    public function create()
    {
        return view('site.registration');
    }

    public function store (Request $request)
    {
        Usuarios::create([
            'nome' => $request->nome,
            'cpf' => $request->cpf,
            'telefone' => $request->telefone,
            'nascimento' => $request->nascimento,
            'email' => $request->email,
            'senha' => $request->senha,
        ]);

        return "<H1>Usuário Cadastrado com Sucesso!!!</H1>";

            
    }
    
}
