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


    public function render()
    {
    return view('livewire.fornecedores-table',[
        'fornecedores' => Fornecedores::simplePaginate(2),
    ]);
    }
}
