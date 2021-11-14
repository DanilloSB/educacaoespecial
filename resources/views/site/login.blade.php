@extends('site.master.layout')

@section('title')
<title>Login</title>
@endsection

@section('content')

<div class="container py-5">
<h1>Faça seu Login</h1>
	<p></p>
	Email:<p></p>
	<input type="text" id="emailDoUsuario" placeholder="Digite seu email"></input>
	<p></p>
	Senha:<p></p>
	<input type="password" id="senha" placeholder="Digite sua senha"></input>
	<p></p>
	<button type="button" id="btnLogar">Logar</button><br>
	{{--<button type="submit" onclick="criarUsuario();">Criar Usuário</button>--}}
	<a href="{{ route('site.registration') }}">Cadastre-se</a>
</div>            


@endsection