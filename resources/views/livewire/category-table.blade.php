<div>
    <!-- Campo de pesquisa -->
    <input type="text" wire:model.live="search" class="form-control mb-3" placeholder="Pesquisar categorias...">

    <!-- Tabela de categorias filtradas -->
    <div class="table-responsive">
        <table class="table table-striped"> 
            <tr>
                <th>Descrição</th>
                <th>Ação</th>
            </tr>
            @foreach($categories as $category)
            <tr>
                <td>{{ $category->description }}</td>
                <td>
                    <a href="{{ route('categories.edit', $category->id) }}" class="btn btn-warning">Editar</a>
                    <form style="display: inline;" action="{{ route('categories.destroy', $category->id) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger" onclick="return confirm('Tem certeza que deseja excluir essa categoria?')">
                            Excluir
                        </button>
                    </form>
                </td>
            </tr>
            @endforeach
        </table>
    </div>
</div>
