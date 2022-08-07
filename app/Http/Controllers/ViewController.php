<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ViewController extends Controller
{
     
     public function ShowFornecedores()
    {
        return view('show.Fornecedores');
    }

    public function formAdicionaFornecedores()
    {
        return view('show.AdicionarFornecedores');
    }


}
