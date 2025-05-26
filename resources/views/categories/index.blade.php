@extends('layouts.master')

@section('content')
<div class="container mt-5">
    <h1 class="text-center">Categorias</h1>
    <div class="text-right mb-4">
        <a href="{{ route('categories.create') }}" class="btn btn-primary">Adicionar Categoria</a>
    </div>

    <livewire:category-table />
</div>
@endsection
