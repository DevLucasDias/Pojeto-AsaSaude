<div>
    <div>
        <div>
            <div class="form-row">

                @if ($checked)
                <div class="col-9">
                    <input wire:model.debounce.300ms="search" type="text" class="form-control mb-2"
                        placeholder="Procurar por fornecedores ...">
                </div>

                <div class="col-1">
                    <select wire:model="paginate" class="custom-select" id="grid-state" >
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
                        wire:click="deletarFornecedores()" title="Excluir em massa"> <i class="fa fa-trash"></i>({{count($checked)}})</button>
                </div>
                @else
                <div class="col-9">
                    <input wire:model.debounce.300ms="search" type="text" class="form-control mb-2"
                        placeholder="Procurar por fornecedores ...">
                </div>

                <div class="col-1">
                    <select wire:model="paginate" class="custom-select" id="grid-state">
                        <option>2</option>
                        <option>5</option>
                        <option>10</option>
                        <option>20</option>
                        <option>30</option>
                        <option>50</option>
                        <option>100</option>
                    </select>
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

                        <th cope="col">Telefone</th>
                        <th cope="col">Celular</th>
                        <th scope="col">Endereço</th>
                        <th cope="col">N:</th>
                        <th cope="col">Cidade</th>
                        <th cope="col">UF</th>
                        <th scope="col">Ações</th>
                    </tr>
                </thead>
                <tbody>

                    @foreach ($fornecedores as $data)
                    <tr>

                        <td><input type="checkbox" value="{{ $data->id }}" wire:model="checked"></td>
                        <td>{{ $data->id }}</td>
                        <td>{{ $data->nome }}</td>
                        <td>{{ $data->CNPJ }}</td>
                        <td>{{ $data->telefone }}</td>
                        <td>{{ $data->celular }}</td>
                        <td>{{ $data->endereco }}</td>
                        <td>{{ $data->numero }}</td>
                        <td>{{ $data->cidade }}</td>
                        <td>{{ $data->estado }}</td>
                        <td>
                            <button class="btn btn-danger btn-md"
                                onclick="confirm('Tem Certeza que quer apagar este fornecedor?') || event.stopImmediatePropagation()"
                                wire:click="deleteUnicoFornecedorSelecionado({{ $data->id }})" title="Excluir"><i class="fa fa-trash"
                                    aria-hidden="true"></i></button>
                            <button class="btn btn-primary btn-md"
                                wire:click="editFornecedor('edit', '{{ $data->id }}' ,  '{{ $data->nome }}' , '{{ $data->CNPJ }}' , '{{ $data->celular }}' , '{{ $data->telefone }}' , '{{ $data->endereco }}' ,' {{ $data->numero }}' , '{{ $data->cidade }}' , '{{ $data->estado }}')"><i
                                    class="fa fa-solid fa-file-pen" aria-hidden="true" title="Editar"></i></button>

                            <button class="btn btn-success btn-md"
                                wire:click="selectAcao({{ $data->id }},  'view', {{ $data }})"><i class="fa fa-eye"
                                    aria-hidden="true" title="Produtos"></i></button>
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
                            <div class="form-row">
                                <div class="form-group col-md-12">
                                    <label>Identificação do Fornecedor:</label><input type="text" class="form-control col-sm-1" name="id" value="{{$idFornecedor}}">
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-12">
                                    <label for="name">Nome Completo:</label>
                                    <input type="text" class="form-control" id="name" name="name"
                                        value="{{$nomeFornecedor}}">
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
                                        value="{{$enderecoFornecedor }}" required>
                                </div>
                                <div class="form-group col-md-1">
                                    <label for="numero">N:</label>
                                    <input type="text" class="form-control" id="numero" name="numero"
                                        value="{{ $numeroFornecedor }}" required>
                                </div>

                                <div class="form-group col-md-3">
                                    <label for="cidade">Cidade:</label>
                                    <input type="text" class="form-control" id="cidade" name="cidade"
                                        value="{{$cidadeFornecedor }}" required>
                                </div>
                                <div class="form-group col-md-1">
                                    <label for="estado">UF:</label>
                                    <input type="text" class="form-control" id="estado" name="estado"
                                        value="{{$estadoFornecedor }}" required>
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
                                                <input type="text" class="form-control" id="nome_produto"
                                                    name="nome_produto" required>
                                                <label for="name">Nome do Produto</label>

                                            </div>
                                            <div class="form-group col-md-3">
                                                <input type="text" class="form-control" id="fornecedor_id"
                                                    name="fornecedor_id" value=" {{$fornecedorId}}">
                                                <label for="name">Codigo do Fornecedor</label>

                                            </div>

                                        </div>
                                        <button type="submit" class="btn btn-primary">Inserir Produto </button>
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


                                    @foreach ($produtos as $dataProdutos)
                                    <tr>
                                        <td>{{ $dataProdutos->id }}</td>
                                        <td>{{ $dataProdutos->nome_produto }}</td>
                                        <td> <button class="btn btn-danger btn-md"
                                                onclick="confirm('Tem Certeza que quer apagar este Produto?') || event.stopImmediatePropagation()"
                                                wire:click="deleteUnicoProdutoSelecionado('{{ $dataProdutos->id }}')"><i
                                                    class="fa fa-trash" aria-hidden="true"></i></button>
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
    </div>
</div>
</div>