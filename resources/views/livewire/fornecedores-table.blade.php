<div class="container ">
    <div class="justify-content-center">
        <div class="form-row">
            <div class="col-4">
                <input wire:model.debounce.300ms="search" type="text" class="form-control mb-2"
                    placeholder="Procurar por fornecedores ...">
            </div>
            <div class="col-2">
                <select wire:model="orderBy" class="custom-select" id="grid-state">
                    <option value="id">ID</option>
                    <option value="name">Name</option>
                    <option value="email">Email</option>
                    <option value="created_at">Sign Up Date</option>
                </select>
            </div>
            <div class="col-4">
                <select wire:model="orderAsc" class="custom-select" id="grid-state">
                    <option value="1">Ascending</option>
                    <option value="0">Descending</option>
                </select>
            </div>
            <div class="col-2">
                <select wire:model="perPage" class="custom-select" id="grid-state">
                    <option>10</option>
                    <option>25</option>
                    <option>50</option>
                    <option>100</option>
                </select>
            </div>
        </div>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">ID</th>
                    <th scope="col">Name</th>
                    <th scope="col">CNPJ</th>
                    <th scope="col">Endereço</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($fornecedores as $data)
                    <tr>
                        <td>{{ $data->id }}</td>
                        <td>{{ $data->id }}</td>
                        <td>{{ $data->nome }}</td>
                        <td>{{ $data->CNPJ }}</td>
                        <td>{{ $data->endereco }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        <div class="">
            <div>
                {{ $fornecedores->links() }}
            </div>
        </div>

    </div>
</div>
