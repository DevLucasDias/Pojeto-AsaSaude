@extends('layouts.layout')

@section('content')

<body>
   <div class="container mx-auto" >
      <h1 class="text-3xl text-center my-10">Fornecedores</h1>
   </div>
   <livewire:fornecedores-table>
      @endsection
      @section('scripts')
      <script>

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

 window.addEventListener('recarregaPagina', event => {
   document.location.reload(true);
 })
      </script>
      @endsection