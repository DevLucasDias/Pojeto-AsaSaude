<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ViewController extends Controller
{
     
    public function Index()
    {
        return view('show.home');
    }

    public function ShowFornecedores()
    {
        return view('show.fornecedores');
    }

    public function ShowProdutos()
    {
        return view('show.produtos');
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
