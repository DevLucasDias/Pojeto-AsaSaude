<?php

namespace App\Http\Controllers;

use App\Produtos;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProdutosController extends Controller
{
    public function AddProdutos(Request $request)
    {
        Produtos::create(
            [
                'nome_produto' => $request->input('nome_produto'),
                'fornecedor_id' => $request->input('fornecedor_id')

            ]
        );

        return redirect()->route('fornecedores');
    }

    public function EditFornecedores(Request $request)
    {
        $selection = Produtos::findOrFail($request->id);
        $selection->update($request->all());

        return redirect()->route('fornecedores');
    }
}
