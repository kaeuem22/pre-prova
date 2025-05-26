@extends('layouts.master')
@section('content')
<div class="container mt-5">
    <h1>Editar Cliente</h1>
    <form action="{{ route('customers.update', $customer->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="row">
            <div class="col-6">
                <label for="name">Nome</label>
                <input type="text" class="form-control" name="name"
                value="{{ $customer->name }}">
            </div>
            <div class="col-6">
                <label for="phone">Telefone</label>
                <input type="text" class="form-control" name="phone"
                value="{{ $customer->phone }}">
            </div>
            <div class="col-6">
                <label for="zipcode">CEP</label>
                <input type="text" class="form-control" name="zipcode" id="zip_code"
                value="{{ $customer->zipcode }}">
            </div>

            <div class="col-6">
                <label for="address">Endereço</label>
                <input type="text" class="form-control address" name="address"
                value="{{ $customer->address }}">
            </div>

            <div class="col-6">
                <label for="district">Bairro</label>
                <input type="text" class="form-control district" name="district"
                value="{{ $customer->district }}">
            </div>

            <div class="col-6">
                <label for="city">Cidade</label>
                <input type="text" class="form-control city" name="city"
                value="{{ $customer->city }}">
            </div>

            <div class="col-6">
                <label for="state">Estado</label>
                <input type="text" class="form-control uf" name="state"
                value="{{ $customer->state }}">
            </div>
        </div>
        <div class="mt-3">
            <button type="submit" class="btn btn-success">Salvar</button>
        </div>
    </form>
</div>
@endsection

