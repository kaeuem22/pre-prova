@extends('layouts.master')
@section('content')
<div class="container mt-5">

    @include('alert')
    <h1>Criar Categoria</h1>
    <form action="{{ route('categories.store') }}" method="POST">
        @csrf
        <div class="form-group">


            <label for="description">Descrição</label>
            <span class="text-danger">*</span>
            <input type="text" class="form-control" name="description">
    @error('description')
    <span class="text-danger">{{ $message }}</span>
    @enderror
            

        </div>
        <div class="form-group mt-3">
            <button type="submit" class="btn btn-success">Salvar</button>
        </div>
    </form>
</div>
@endsection