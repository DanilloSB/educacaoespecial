<!-- Página De Login -->

@extends('site.master.layout')

@section('title')
<title>Login</title>
@endsection

@section('content')

<div class="container mt-5"> <div class=" text-center mt-5 ">
<h1>Faça seu Login</h1>

@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<form method="POST" action="{{ route('auth.user') }}">
	@csrf
<label for="">Email</label> <br>
<input type="email" name="email" placeholder="Digite seu email" > <br>
<label for="">Senha</label> <br>
<input type="password" name="password" placeholder="Digite sua senha" > <br><br>
	
	<button onclick="logarUsuario()" type="submit" id="btnLogar" >Logar</button>
	<button onclick="criarUsuario();" type="type" >Criar Usuário</button><br><br>
	<a href="{{ route('site.registration') }}">Cadastre-se</a>
</div>            

</form>

@endsection