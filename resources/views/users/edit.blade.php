@extends('layouts.master')
@section('content')
<div class="container mt-5">
    <h1>Editar Usuario</h1>
    <form action="{{ route('user.update', $users->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="name">Nome</label>
            <input type="text" class="form-control"
            name="description" value="{{ $user->name }}">

            <label for="email">Email</label>
            <input type="text" class="form-control"
            name="description" value="{{ $uesr->email }}">

            <label for="birth">Nascimento</label>
            <input type="date" class="form-control"
            name="description" value="{{ $user->birth }}">
        </div>
        <div class="form-group mt-3">
            <button type="submit" class="btn btn-success">Salvar</button>
        </div>
    </form>
</div>
@endsection

