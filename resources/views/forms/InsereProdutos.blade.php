@extends('layouts.layout')
@section('content')
    <div class="container  justify-content-center">
        <div>
            <form>
                <div class="form-row">
                    <div class="form-group col-md-12">
                        <label for="name_product">Nome do Produto:</label>
                        <input type="text" class="form-control" id="name_product" name="name_product">
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-12">
                        <label for="name">Nome Completo:</label>
                        <input type="text" class="form-control" id="name" name="name">
                    </div>
                </div>
             
                <button type="submit" class="btn btn-primary">Enviar</button>
            </form>
        </div>
    </div>
@endsection

