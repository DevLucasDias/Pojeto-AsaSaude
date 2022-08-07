@extends('layouts.layout')

@section('content')

<body>
   <div >
     
      <livewire:produtosde-fornecedores-table>
      
   </div>
  
      @endsection
      @section('scripts')
      <script>
type = "text/javascript" > $("#cnpj").mask("00.000.000/0000-00");
type = "text/javascript" > $("#telefone").mask("(00) 0000-0000");
type = "text/javascript" > $("#celular").mask("(00) 00000-0000");

      </script>
      @endsection