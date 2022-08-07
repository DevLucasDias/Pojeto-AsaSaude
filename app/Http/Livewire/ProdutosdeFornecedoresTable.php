<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithPagination;

use App\Fornecedores;
use App\Produtos;
use phpDocumentor\Reflection\Types\This;

class ProdutosdeFornecedoresTable extends Component
{
    public $nomeFornecedor;
    public $CNPJFornecedor;
    public $telefoneFornecedor;
    public $celularFornecedor;
    public $numeroFornecedor;
    public $enderecoFornecedor;
    public $cidadeFornecedor;
    public $estadoFornecedor;

    public function render()
    {
        return view('livewire.produtosde-fornecedores-table');
    }
    
}
