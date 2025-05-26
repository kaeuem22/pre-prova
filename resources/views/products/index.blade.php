@extends('layouts.master')
@section('content')
<div class="container mt-5">
    <h1 class="text-center">Produtos</h1>
    <div class="text-right">
        <a href="{{ route('products.create') }}" class="btn btn-primary">Adicionar Produto</a>
    </div>
   
    <livewire:product-table />
</div>
@endsection
