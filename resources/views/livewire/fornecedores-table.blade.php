<div>
<div class="container ">
    <div class="justify-content-center">
        <div class="form-row">

            @if ($checked)
            <div class="col-9">
                <input wire:model.debounce.300ms="search" type="text" class="form-control mb-2"
                    placeholder="Procurar por fornecedores ...">
            </div>
           
            <div class="col-1"> 
                <select wire:model="paginate" class="custom-select" id="grid-state">
                    <option>5</option>
                    <option>10</option>
                    <option>20</option>
                    <option>50</option>
                    <option>100</option>
                </select>
            </div>
             
            <div class="col-2"> 
                <button class="btn btn-danger"  type="button" onclick="confirm('Tem certeza que deseja excluir esses fornecedores?') || event.stopImmediatePropagation" wire:click="deletarFornecedores()"> <i class="fa fa-trash"></i>Excluir:({{count($checked)}})</button> 
                </div> 
            @else
            <div class="col-9">
                <input wire:model.debounce.300ms="search" type="text" class="form-control mb-2"
                    placeholder="Procurar por fornecedores ...">
            </div>
     
            <div class="col-1"> 
                <select wire:model="paginate" class="custom-select" id="grid-state">
                    <option>5</option>
                    <option>10</option>
                    <option>20</option>
                    <option>50</option>
                    <option>100</option>
                </select>
            </div>
            <div class="col-2"> 
                <button class="btn btn-primary"  type="button"  wire:click="addFornecedores()"><i class="fa fa-solid fa-circle-plus"></i> Adicionar</button> 
                </div> 
            @endif
            
        </div>
     
     
        <table id="tableFornecedores" name="tableFornecedores" class="table table-striped table-bordered">
            <thead>
                <tr>
                    <th  scope="col">#</th>
                    <th  scope="col">ID</th>
                    <th  scope="col">Name</th>
                    <th  cope="col">CNPJ</th>
                    <th  scope="col">Endereço</th>
                    <th  scope="col">Ações</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($fornecedores as $data)
                    <tr>
                        <td><input type="checkbox" value="{{ $data->id }}" wire:model="checked"></td>
                        <td>{{ $data->id }}</td>
                        <td>{{ $data->nome }}</td>
                        <td>{{ $data->CNPJ }}</td>
                        <td>{{ $data->endereco }}</td>
                        <td>
                            <button class="btn btn-danger btn-md"
                                onclick="confirm('Tem Certeza que quer apagar este fornecedor?') || event.stopImmediatePropagation()"
                                wire:click="deleteUnicoFornecedorSelecionado({{ $data->id }})"><i class="fa fa-trash"
                                    aria-hidden="true"></i></button>
                            <button class="btn btn-primary btn-md" wire:click="editFornecedores({{ $data->id }})"><i class="fa fa-solid fa-file-pen" aria-hidden="true"></i></button>
                             <button class="btn btn-success btn-md"
                                        onclick="confirm('Are you sure you want to delete this record?') || event.stopImmediatePropagation()"
                                        wire:click="viewProdutos({{ $data->id }})"><i class="fa fa-eye"
                                            aria-hidden="true"></i></button>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        <div class="">
            <div  class="col-sm-6 offset-5" >
                {{ $fornecedores->links() }}
            </div>
        </div>

        @if(!empty($editFornecedorModal))
    </div>
    <div class="modal" {{$editFornecedorModal?'is-active':''}}>
    <div class="modal-background">
        <div class="modal-content">
            <h1>H1</h1>

        </div>

    </div>
        
    </div>
        @endif
   
</div>

