@extends('layouts.layout')
@section('content')
    <div class="container  justify-content-center">
        <div>
            <form>
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
                    <div class="form-group col-md-6">
                        <label for="name">Endereço:</label>
                        <input type="text" class="form-control" id="name" name="name">
                    </div>
                    <div class="form-group col-md-3">
                        <label for="cnpj">Cidade:</label>
                        <input type="cidade" class="form-control" id="cidade" name="cidade">
                    </div>
                    <div class="form-group col-md-3">
                        <label for="telefone">UF:</label>
                        <input type="estado" class="form-control" id="estado" name="estado">
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
    <script>
        type = "text/javascript" > $("#cnpj").mask("00.000.000/0000-00");
        type = "text/javascript" > $("#telefone").mask("(00) 0000-0000");
        type = "text/javascript" > $("#celular").mask("(00) 00000-0000");
    </script>
@endsection
