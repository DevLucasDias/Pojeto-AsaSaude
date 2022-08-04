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
    public $paginate = '';
    public $search = "";
    public $selectedClass = null;
    public $sections = null;
    public $selectedSection = null;
    public $checked = [];
    public $selectPage = false;
    public $selectAll = false;

    public function deleteSingleRecord($id)
    {
        $dadofornecedor = Fornecedores::findOrFail($id);
        $dadofornecedor->delete();
    }

    public function getStudentsQueryProperty()
    {
        return Fornecedores::where('CNPJ', $this->$this->selectedClass)->search(trim($this->search));
    }

    public function updatedSelectPage($value)
    {
        if ($value) {
            $this->checked = $this->fornecedores->pluck('id')->map(fn ($item) => (string) $item)->toArray();
        } else {
            $this->checked = [];
        }
    }

    public function updatedChecked()
    {
        $this->selectPage = false;
    }

    public function selectAll()
    {
        $this->selectAll = true;
        $this->checked = $this->fornecedoresQuery->pluck('id')->map(fn ($item) => (string) $item)->toArray();
    }

    public function deleteRecords()
    {
        Fornecedores::whereKey($this->checked)->delete();
        $this->checked = [];
        $this->selectAll = false;
        $this->selectPage = false;
    }

    public function isChecked($id)
    {
        return in_array($id, $this->checked);
    }

    public function render()
    {
    return view('livewire.fornecedores-table',[
        'fornecedores' => Fornecedores::simplePaginate($this->paginate),
    ]);
    }
}
