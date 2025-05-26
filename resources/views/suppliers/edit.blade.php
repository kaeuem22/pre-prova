@extends('layouts.master')
@section('content')
<div class="container mt-5">
    <h1>Editar Categoria</h1>
    <form action="{{ route('suppliers.update', $supplier->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-name">
            <label for="description">Nome</label>
            <input type="text" class="form-control"
            name="name" value="{{ $supplier->name }}">

            <label for="cnpj">Cnpj</label>
            <input type="text" class="form-control"
            name="cnpj" value="{{ $supplier->cnpj }}">

            <label for="phone">Telefone</label>
            <input type="text" class="form-control"
            name="phone" value="{{ $supplier->phone }}">

            <label for="address">Endereço</label>
            <input type="text" class="form-control"
            name="address" value="{{ $supplier->address }}">

            <label for="district">Bairro</label>
            <input type="text" class="form-control"
            name="district" value="{{ $supplier->district }}">

            <label for="city">Estado</label>
            <input type="text" class="form-control"
            name="city" value="{{ $supplier->city }}">

            <label for="zipcode">CEP</label>
            <input type="text" class="form-control"
            name="zipcode" value="{{ $supplier->zipcode }}">
        </div>
        <div class="form-group mt-3">
            <button type="submit" class="btn btn-success">Salvar</button>
        </div>
    </form>
</div>
@endsection

