<?php

namespace App\Http\Livewire;
use Livewire\Component;
use Livewire\WithPagination;

use App\Fornecedores;
use App\User;
use Illuminate\Support\Facades\DB;


class FornecedoresTable extends Component
{
    use WithPagination;
    public $paginate = '5';
    public $search = "";
    public $checked = [];
    public $selectPage = false;

    
    public function deleteUnicoFornecedorSelecionado($id)
    {
        $dadofornecedor = Fornecedores::findOrFail($id);
        $dadofornecedor->delete();
    }


    public function deletarFornecedores()
    {
        Fornecedores::whereKey($this->checked)->delete();
        $this->checked = [];
        $this->selectPage = false;
    }

    public function editFornecedores($fornecedor)
    {
        $this->editFornecedor = $fornecedor;
        $this->editFornecedorModal = true;
    }

    public function viewProdutos()
    {

    }
    public function addFornecedores()
    {
   

    }

    public function render()
    {
    return view('livewire.fornecedores-table',[
    'fornecedores' => Fornecedores::procurar(trim($this->search))->simplePaginate($this->paginate),

    ]);
    }
}
