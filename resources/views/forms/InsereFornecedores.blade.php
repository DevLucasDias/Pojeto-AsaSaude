@extends('layouts.layout')
@section('content')
    <div class="container  justify-content-center">
        <div>
            <form action="/add-fornecedores" method="post">
                @csrf
                <div class="form-row">
                    <div class="form-group col-md-12">
                        <label for="name">Nome Completo:</label>
                        <input type="text" class="form-control" id="name" name="name">
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="cnpj">CNPJ:</label>
                        <input type="text" class="form-control" id="cnpj" name="cnpj">
                    </div>
                    <div class="form-group col-md-3">
                        <label for="telefone">Telefone:</label>
                        <input type="text" class="form-control" id="telefone" name="telefone">
                    </div>
                    <div class="form-group col-md-3">
                        <label for="celular">Celular::</label>
                        <input type="text" class="form-control" id="celular" name="celular">
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-7">
                        <label for="endereco">Endereço:</label>
                        <input type="text" class="form-control" id="endereco" name="endereco">
                    </div>
                    <div class="form-group col-md-1">
                        <label for="numero">N:</label>
                        <input type="text" class="form-control" id="numero" name="numero">
                    </div>

                    <div class="form-group col-md-3">
                        <label for="cidade">Cidade:</label>
                        <input type="text" class="form-control" id="cidade" name="cidade">
                    </div>
                    <div class="form-group col-md-1">
                        <label for="estado">UF:</label>
                        <input type="text" class="form-control" id="estado" name="estado">
                    </div>
                </div>
                <div class="form-check">
                </div>
                <button type="submit" class="btn btn-primary">Enviar</button>
            </form>
        </div>
    </div>
@endsection
@section('scripts')
   
@endsection
