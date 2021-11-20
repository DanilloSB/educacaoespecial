<!-- Página De Contato -->

@extends('site.master.layout')

@section('title')
<title>Contato</title>
@endsection

@section('content')
<div class="container"> <div class=" text-center mt-5 ">
    <h1>Fale Conosco</h1>
</div>   
<div class="row ">
        <div class="col-lg-8 mx-auto">
            <div class="card mt-2 mx-auto p-4 bg-light">
                <div class="card-body bg-light">
                    <div class="container">
                        <form id="contact-form" role="form">
                            <div class="controls">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group"> <label for="form_name">Nome *</label> <input id="form_name" type="text" name="name" class="form-control" placeholder="Por favor insira seu primeiro nome" required="required" data-error="O primeiro nome é obrigatório."> </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group"> <label for="form_lastname">Sobrenome *</label> <input id="form_lastname" type="text" name="surname" class="form-control" placeholder="Por favor insira seu sobrenome" required="required" data-error="O sobrenome é obrigatório."> </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group"> <label for="form_email">Email *</label> <input id="form_email" type="email" name="email" class="form-control" placeholder="Por favor insira seu email" required="required" data-error="É necessário um e-mail válido."> </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group"> <label for="form_message">Mensagem *</label> <textarea id="form_message" name="message" class="form-control" placeholder="Escreva sua mensagem aqui." rows="4" required="required" data-error="Por favor, deixe-nos uma mensagem."></textarea> </div>
                                    </div>
                                    <div class="col-md-12"> <input type="submit" class="btn btn-success btn-send pt-2 btn-block " value="Enviar Mensagem"> </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div> 
        </div> 
    </div>
</div>
<br>
<br>  
@endsection