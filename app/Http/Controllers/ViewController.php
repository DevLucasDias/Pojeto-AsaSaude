<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ViewController extends Controller
{
     
     public function ShowFornecedores()
    {
        return view('show.Fornecedores');
    }

    public function ShowProdutos()
    {
        return view('show.Produtos');
    }

    public function showformprodutos()
    {
        return view('forms/Insereprodutos');
    }
    public function showformfornecedores()
    {
        return view('forms/InsereFornecedores');
    }
}
