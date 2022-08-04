<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Fornecedores;

class FornecedoresController extends Controller
{
    public function AddFornecedores(Request $request)
    {
        // dd($request);
        if (DB::table('fornecedores')->where('cnpj', $request->input('username'))->doesntExist()) {

            $novoFornecedor = Fornecedores::create(
                [
                    'nome' => $request->input('name'),
                    'CNPJ' => $request->input('cnpj'),
                    'telefone' => $request->input('telefone'),
                    'celular' => $request->input('celular'),
                    'endereco' => $request->input('endereco'),
                    'numero' => $request->input('numero'),
                    'cidade' => $request->input('cidade'),
                    'estado' => $request->input('estado')
                ]);
        }
    }

    public function EditFornecedores(Request $request)
    {
        echo "fornecedores";
    }

    public function RemoveFornecedores(Request $request)
    {
        echo "fornecedores";
    }


}
