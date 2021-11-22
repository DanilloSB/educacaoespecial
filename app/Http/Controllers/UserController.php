<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use App\Models\User;

class UserController extends Controller
{
        public function login()
    {
        return view('site.login');
    }

        public function auth(Request $request)
    {
        $this->validate ($request,[
            'email' => 'required',
            'password' => 'required'
        ],[
            'email.required' => 'Email é obrigatório',
            'password.required' => 'Senha é obrigatória'
        ]);

        if(Auth::attempt(['email' => $request->email, 'password' => $request->password])){
            dd('logou');
        }else{
            dd('Não Logo');
    
        }
    }
}