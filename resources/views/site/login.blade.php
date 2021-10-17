@extends('site.master.layout')

@section('title')
<title>Login</title>
@endsection

@section('content')

<div class="container">
<h1>Faça seu Login</h1>
	<p></p>
	Usuario:<p></p>
	<input type="text" id="emailDoUsuario"></input>
	<p></p>
	Senha:<p></p>
	<input type="password" id="senha"></input>
	<p></p>
	<button type="button" id="btnLogar">Logar</button>
	<button type="submit" onclick="criarUsuario();">Criar Usuário</button>
</div>            


@endsection