
                <div class="container">
                    <div >
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
 