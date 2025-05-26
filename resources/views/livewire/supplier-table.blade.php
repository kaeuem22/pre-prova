<div>
<input type="text" wire:model.live="search" class="form-control mb-3" placeholder="Pesquisar fornecedor...">
<div class="table-responsive">
    <table class="table table-striped"> 
        <tr>
            <th>Nome</th>
            <th>Cnpj</th>
            <th>Telefone</th>
            <th>Endereço</th>
            <th>Bairro</th>
            <th>Cidade</th>
            <th>Estado</th>
            <th>CEP</th>
            <th>Ação</th>
        </tr>
        @foreach($suppliers as $supplier)
        <tr>
            <td>{{ $supplier->name }}</td>
            <td>{{ $supplier->cnpj }}</td>
            <td>{{ $supplier->phone }}</td>
            <td>{{ $supplier->address }}</td>
            <td>{{ $supplier->district }}</td>
            <td>{{ $supplier->city }}</td>
            <td>{{ $supplier->state }}</td>
            <td>{{ $supplier->zipcode }}</td>
            <td>
                <a href="{{ route('suppliers.edit', $supplier->id) }}" class="btn btn-warning">Editar</a>
                <form style="display: inline;" action="{{ route('suppliers.destroy', $supplier->id) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger" onclick="return confirm('Tem certeza que deseja excluir esse cliente?')">
                        Excluir
                    </button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
</div>
</div>
