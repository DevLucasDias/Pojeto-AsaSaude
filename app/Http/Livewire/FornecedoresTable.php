<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithPagination;

use App\Fornecedores;
use App\Produtos;
use Illuminate\Support\Facades\DB;
use phpDocumentor\Reflection\Types\This;

class FornecedoresTable extends Component
{
    use WithPagination;
    public $paginate = '10';
    public $paginateProdutos = '10';
    public $search = "";
    public $idFornecedor = "";
    public $checked = [];
    public $selectPage = false;
    public $dadosFornecedor = [];

    public $fornecedorId;
    public $action;

    public $nomeFornecedor;
    public $CNPJFornecedor;
    public $telefoneFornecedor;
    public $celularFornecedor;
    public $numeroFornecedor;
    public $enderecoFornecedor;
    public $cidadeFornecedor;
    public $estadoFornecedor;

    public $nomeProduto;
    public $idProduto;

    public function deleteUnicoFornecedorSelecionado($id)
    {
        $dadofornecedor = Fornecedores::findOrFail($id);
        $dadofornecedor->delete();
        $this->dispatchBrowserEvent('recarregaPagina');
    }

    public function deleteUnicoProdutoSelecionado($id)
    {
        $dadofornecedor = Produtos::findOrFail($id);
        $dadofornecedor->delete();

        $this->dispatchBrowserEvent('recarregaPagina');
    }


    public function deletarFornecedores()
    {
        $fornecedor = Fornecedores::whereKey($this->checked)->delete();
        Produtos::where($fornecedor->id, 'fornecedor_id')->delete();
        $this->checked = [];
        $this->selectPage = false;
        $this->dispatchBrowserEvent('recarregaPagina');
        
    }

    public function selectAcao($fornecedorId, $action, $dadosFornecedor)
    {
        $this->fornecedorId = $fornecedorId;
        $this->action = $action;
        $this->dadosFornecedor = $dadosFornecedor;
     
        if ($action == 'view') {
            $this->dispatchBrowserEvent('openModalView');
        }
    
    }

    public function editFornecedor($action,  $idFornecedor, $nomeFornecedor, $CNPJFornecedor, $celularFornecedor, $telefoneFornecedor, $enderecoFornecedor, $numeroFornecedor, $cidadeFornecedor, $estadoFornecedor)
    {
        $this->action = $action;

        $this->nomeFornecedor = $nomeFornecedor;
        $this->CNPJFornecedor =  $CNPJFornecedor;
        $this->telefoneFornecedor =  $telefoneFornecedor;
        $this->celularFornecedor =  $celularFornecedor;
        $this->enderecoFornecedor =  $enderecoFornecedor;
        $this->numeroFornecedor = $numeroFornecedor;
        $this->cidadeFornecedor =  $cidadeFornecedor;
        $this->estadoFornecedor = $estadoFornecedor;
        $this->idFornecedor = $idFornecedor;

        if ($action == 'edit') {
            $this->dispatchBrowserEvent('openModalEdit');
        }
    }

    public function render()
    {
        return view('livewire.fornecedores-table', [
            'fornecedores' => Fornecedores::procurar(trim($this->search))->simplePaginate($this->paginate),
            'produtos' => Produtos::produtosDeFornecedor(trim($this->fornecedorId))->simplePaginate($this->paginateProdutos),
        ]);
    }
}
