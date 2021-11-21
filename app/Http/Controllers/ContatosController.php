<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contato;

class ContatosController extends Controller
{
    public function create()
    {
        return view('site.contact');
    }

    public function store(Request $request)
    {
        Contato::create([
            'nome' => $request->nome,
            'sobrenome' => $request->sobrenome,
            'email' => $request->email,
            'msg' => $request->msg,
        ]);

       return view('site.contact'); 
       
       
      
    }
}
