@extends('layouts.master')
@section('content')
<div class="container mt-5">
    <h1 class="text-center">Categorias</h1>
    <div class="text-right">
        <a href="{{ route('users.create') }}"
        class="btn btn-primary">Adicionar Categoria</a>
    </div>
</div>
<table class="table table-striped"> 
    <tr>
        <th>Descrição</th>
        <th>Ação</th>
    </tr>
    @foreach($Users as $user)
    <tr>
        <td>{{ $user->nome }}</td>
        <td><a href="{{ route('users.edit', $user->id) }}" 
            class="btn btn-warning">Editar</a>
        <form style="display: inline;" action="{{ route('users.destroy', $user->id) }}" method="POST">
            @csrf
            @method('DELETE')
            <button type="submit" class="btn btn-danger"
            onclick="return confirm('Tem certeza que deseja excluir esse usuario?')">
                Excluir
            </button>
        </form>
        </td>
    </tr>
    @endforeach
</table>
