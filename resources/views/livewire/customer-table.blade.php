<div>
<input type="text" wire:model.live="search" class="form-control mb-3" placeholder="Pesquisar cliente...">
<div class="table-responsive">
    <table class="table table-striped"> 
        <tr>
            <th>Nome</th>
            <th>Telefone</th>
            <th>Ação</th>
        </tr>
        @foreach($customers as $customer)
        <tr>
            <td>{{ $customer->name }}</td>
            <td>{{ $customer->phone }}</td>
            <td>
                <a href="{{ route('customers.edit', $customer->id) }}" class="btn btn-warning">Editar</a>
                <form style="display: inline;" action="{{ route('customers.destroy', $customer->id) }}" method="POST">
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
