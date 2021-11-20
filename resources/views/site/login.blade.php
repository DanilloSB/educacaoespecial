@extends('site.master.layout')

@section('title')
<title>Login</title>
@endsection

@section('content')

<div class="container mt-5">
<h1>Faça seu Login</h1>

<label for="">Email</label> <br>
<input type="email" name="email" placeholder="Digite seu email" > <br>
<label for="">Senha</label> <br>
<input type="password" name="senha" placeholder="Digite sua senha" > <br><br>
	
	<button type="button" id="btnLogar">Logar</button>
	<button onclick="criarUsuario();" type="type" >Criar Usuário</button><br><br>
	<a href="{{ route('site.registration') }}">Cadastre-se</a>
</div>            


@endsection