@extends('site.master.layout')

@section('title')
<title>Cadastro</title>
@endsection

@section('content')
<form method="Post" class="form-signin py-5">
    @csrf
    <label for="">Nome</label> <br>
    <input type="text" name="nome" placeholder="Digite seu nome" > <br>
    <label for="">CPF</label> <br>
    <input type="text" name="cpf" placeholder="Digite seu CPF"> <br>
    <label for="">Telefone</label> <br>
    <input type="text" name="telefone" placeholder="Digite seu telefone"> <br>
    <label for="">Nascimento</label> <br>
    <input type="date" name="nascimento"> <br>
    <label for="">Email</label> <br>
    <input type="email" name="email" placeholder="Digite seu email"> <br>
    <label for="">Senha</label> <br>
    <input type="password" name="senha" placeholder="Digite sua senha"> <br>
    <button type="submit">Enviar</button>
    
</form>  
@endsection