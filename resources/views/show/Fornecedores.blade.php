@extends('layouts.layout')

@section('content')

<body>
   <div class="container mx-auto">
      <h1 class="text-3xl text-center my-10">Fornecedores</h1>
   </div>
   <livewire:fornecedores-table>
      @endsection
      @section('scripts')
      <script>
type = "text/javascript" > $("#cnpj").mask("00.000.000/0000-00");
type = "text/javascript" > $("#telefone").mask("(00) 0000-0000");
type = "text/javascript" > $("#celular").mask("(00) 00000-0000");

 window.addEventListener('openModalEdit', event => {
    $('#modalEdit').modal('show');
 })

 window.addEventListener('closeModalEdit', event => {
    $('#modalEdit').modal('hide');
 })

 window.addEventListener('openModalView', event => {
    $('#modalView').modal('show');
 })

 window.addEventListener('closeModalView', event => {
    $('#modalView').modal('hide');
 })

 window.addEventListener('openModalAdd', event => {
    $('#modalAdd').modal('show');
 })
 window.addEventListener('recarregaPagina', event => {
   document.location.reload(true);
 })
      </script>
      @endsection