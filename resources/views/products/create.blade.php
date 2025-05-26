@extends('layouts.master')
@section('content')
<div class="container mt-5">
@include('alert')
    <h1>Criar Produto</h1>
    <form action="{{ route('products.store') }}" method="POST">
        @csrf
        <div class="row">
            <div class="col-6">
                <label for="name">Nome</label>
                <input type="text" class="form-control" name="name">
                @error('name')
    <span class="text-danger">{{ $message }}</span>
    @enderror
            </div>
            <div class="col-6">
                    <label for="description">Descrição</label>
                    <input type="text" class="form-control" name="description">
                    @error('description')
    <span class="text-danger">{{ $message }}</span>
    @enderror
            </div>
        </div>
        <div class="row">
            <div class="col-6">
                <label for="price">Preço</label>
                <input type="number" class="form-control" name="price">
            </div>
            <div class="col-6">
                <label for="category_id">Categoria</label>
                <select class="form-control" name="category_id">
                    @foreach($categories as $category)
                        <option value="{{ $category->id }}">{{ $category->description }}</option>
                    @endforeach
                </select>
            </div>
        </div>
        
        <div class="form-group mt-3">
            <button type="submit" class="btn btn-success">Salvar</button>
        </div>
    </form>
</div>
@endsection


