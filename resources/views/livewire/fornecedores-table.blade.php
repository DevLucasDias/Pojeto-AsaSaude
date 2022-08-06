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
                    <button class="btn btn-danger" type="button"
                        onclick="confirm('Tem certeza que deseja excluir esses fornecedores?') || event.stopImmediatePropagation"
                        wire:click="deletarFornecedores()"> <i class="fa fa-trash"></i>({{count($checked)}})</button>
                    <button class="btn btn-primary btn-md" wire:click="selectAcao('', 'adicionar', '')"><i
                            class="fa-solid fa-plus"></i></button>
                </div>
                @else
                <div class="col-9">
                    <input wire:model.debounce.300ms="search" type="text" class="form-control mb-2"
                        placeholder="Procurar por fornecedores ...">
                </div>

                <div class="col-1">
                    <select wire:model="paginate" class="custom-select" id="grid-state">
                        <option>10</option>
                        <option>20</option>
                        <option>30</option>
                        <option>50</option>
                        <option>100</option>
                    </select>


                </div>
                <div class="col-1">
                    <button class="btn btn-primary btn-md" wire:click="selectAcao('', 'adicionar', '')"><i
                            class="fa-solid fa-plus"></i></button>
                </div>

                @endif

            </div>


            <table id="tableFornecedores" name="tableFornecedores" class="table table-striped table-bordered">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">ID</th>
                        <th scope="col">Name</th>
                        <th cope="col">CNPJ</th>
                        <th scope="col">Endereço</th>
                        <th scope="col">Ações</th>
                    </tr>
                </thead>
                <tbody>

                    @foreach ($fornecedores as $data)
                    <tr>

                        <td><input type="checkbox" value="{{ $data->id }}" wire:model="checked" ></td>
                        <td>{{ $data->id }}</td>
                        <td>{{ $data->nome }}</td>
                        <td>{{ $data->CNPJ }}</td>
                        <td>{{ $data->endereco }}</td>
                        <td>
                            <button class="btn btn-danger btn-md"
                                onclick="confirm('Tem Certeza que quer apagar este fornecedor?') || event.stopImmediatePropagation()"
                                wire:click="deleteUnicoFornecedorSelecionado({{ $data->id }})"><i class="fa fa-trash"
                                    aria-hidden="true"></i></button>
                            <button class="btn btn-primary btn-md"
                                wire:click="editFornecedor('edit', '{{ $data->id }}',  '{{ $data->nome }}' , '{{ $data->CNPJ }}' , '{{ $data->celular }}' , '{{ $data->telefone }}' , '{{ $data->endereco }}' ,' {{ $data->numero }}' , '{{ $data->cidade }}' , '{{ $data->estado }}')"><i
                                    class="fa fa-solid fa-file-pen" aria-hidden="true"></i></button>

                            <button class="btn btn-success btn-md"
                                wire:click="selectAcao({{ $data->id }},  'view', {{$data}})"><i class="fa fa-eye"
                                    aria-hidden="true"></i></button>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>

            <div class="">
                <div class="col-sm-6 offset-5">
                    {{ $fornecedores->links() }}
                </div>
            </div>
        </div>

        {{-- Modais --}}

        <div class="modal fade" id="modalEdit" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-xl ">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1>Fornecedor</h1>
                    </div>
                    <div class="modal-body">
                        <form action="/edit-fornecedores" method="post">
                            @csrf
                            <input type="text" name="id" value="{{$idFornecedor}}" >
                            <div class="form-row">
                                <div class="form-group col-md-12">
                                    <label for="name">Nome Completo:</label>
                                    <input type="text" class="form-control" id="name" name="name"
                                        value="{{$nomeFornecedor}}" >
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label for="cnpj">CNPJ:</label>
                                    <input type="text" class="form-control" id="cnpj" name="cnpj"
                                        value="{{$CNPJFornecedor }}">
                                </div>
                                <div class="form-group col-md-3">
                                    <label for="telefone">Telefone:</label>
                                    <input type="text" class="form-control" id="telefone" name="telefone"
                                        value="{{$telefoneFornecedor }}">
                                </div>
                                <div class="form-group col-md-3">
                                    <label for="celular">Celular::</label>
                                    <input type="text" class="form-control" id="celular" name="celular"
                                        value="{{$celularFornecedor }}">
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-7">
                                    <label for="endereco">Endereço:</label>
                                    <input type="text" class="form-control" id="endereco" name="endereco"
                                        value="{{$enderecoFornecedor }}">
                                </div>
                                <div class="form-group col-md-1">
                                    <label for="numero">N:</label>
                                    <input type="text" class="form-control" id="numero" name="numero"
                                        value="{{ $numeroFornecedor }}">
                                </div>

                                <div class="form-group col-md-3">
                                    <label for="cidade">Cidade:</label>
                                    <input type="text" class="form-control" id="cidade" name="cidade"
                                        value="{{$cidadeFornecedor }}">
                                </div>
                                <div class="form-group col-md-1">
                                    <label for="estado">UF:</label>
                                    <input type="text" class="form-control" id="estado" name="estado"
                                        value="{{$estadoFornecedor }}">
                                </div>
                            </div>
                            <div class="form-check">
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                <button type="submit" class="btn btn-primary">Salvar</button>
                            </div>
                        </form>
                    </div>
                    <div class="modal-footer">

                    </div>
                </div>
            </div>
        </div>

        <!-- Produtos do Fornecedor -->

        <div class="modal fade" id="modalView" tabindex="-1" aria-hidden="true">
            <div class="modal-dialog modal-xl">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1>Produtos</h1>
                    </div>
                    <div class="modal-body">
                        <div>
                            <button class="btn btn-primary d-flex justify-content-end" type="button"
                                data-toggle="collapse" data-target="#inserirProdutos" aria-expanded="false"
                                aria-controls="collapseExample">
                                Inserir Produtos
                            </button>
                            <div class="collapse" id="inserirProdutos">
                                <div class="card card-body">
                                    <form action="/add-produtos" method="post">
                                        @csrf
                                       
                                        <div class="form-row">
                                            <div class="form-group col-md-9">
                                                <input type="text" class="form-control" id="nome_produto" name="nome_produto" required>
                                                <label for="name">Nome do Produto</label>

                                            </div>
                                            <div class="form-group col-md-3">
                                                <input type="text" class="form-control" id="fornecedor_id"
                                                    name="fornecedor_id" value="{{$fornecedorId}}" required>
                                                <label for="name">Codigo do Fornecedor</label>

                                            </div>
                                           
                                        </div>
                                        <button  type="submit" class="btn btn-primary">Salvar</button>
                                    </form>
                                </div>

                            </div>
                            <table id="tableProdutos" name="tableProdutos" class="table table-striped table-bordered">
                                <thead>

                                    <tr>
                                        <th scope="col">ID</th>
                                        <th scope="col">Name do Produto</th>
                                        <th scope="col">Data de Criação:</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    {{$produtos}}

                                    @foreach ($produtos as $dataProdutos)
                                    <tr>
                                        <td>{{ $dataProdutos->id }}</td>
                                        <td>{{ $dataProdutos->nome_produto }}</td>
                                        <td> <button class="btn btn-danger btn-md"
                                            onclick="confirm('Tem Certeza que quer apagar este Produto?') || event.stopImmediatePropagation()"
                                            wire:click="deleteUnicoProdutoSelecionado('{{ $dataProdutos->id }}')"><i class="fa fa-trash"
                                                aria-hidden="true"></i></button>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
                        </div>
                    </div>
                </div>
            </div>


        </div>

        <div class="modal fade" id="modalAdd" tabindex="-1" aria-hidden="true">
            <div class="modal-dialog modal-xl">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1>Adicionar Fornecedor</h1>
                    </div>
                    <div class="modal-body">
                        <form action="/add-fornecedores" method="post">
                            @csrf
                            <div class="form-row">
                                <div class="form-group col-md-12">
                                    <label for="nomeFornecedor">Nome Completo:</label>
                                    <input type="text" class="form-control" id="name" name="name" required>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label for="cnpj">CNPJ:</label>
                                    <input  type="text" class="form-control" id="cnpj" name="cnpj" required>
                                </div>
                                <div class="form-group col-md-3">
                                    <label for="telefone">Telefone:</label>
                                    <input  type="text" class="form-control" id="telefone" name="telefone">
                                </div>
                                <div class="form-group col-md-3">
                                    <label for="celular">Celular::</label>
                                    <input  type="text" class="form-control" id="celular" name="celular">
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-7">
                                    <label for="endereco">Endereço:</label>
                                    <input type="text" class="form-control" id="endereco" name="endereco" required>
                                </div>
                                <div class="form-group col-md-1">
                                    <label for="numero">N:</label>
                                    <input type="text" class="form-control" id="numero" name="numero" required>
                                </div>

                                <div class="form-group col-md-3">
                                    <label for="cidade">Cidade:</label>
                                    <input  type="text" class="form-control" id="cidade" name="cidade" required>
                                </div>
                                <div class="form-group col-md-1">
                                    <label for="estado">UF:</label>
                                    <input  type="text" class="form-control" id="estado" name="estado" required>
                                </div>
                            </div>
                            <div class="form-check">
                            </div>
                            <button type="submit" class="btn btn-primary">Enviar</button>
                        </form>
                    </div>
                </div>
            </div>


        </div>


    </div>
</div>