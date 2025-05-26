@extends('layouts.master')
@section('content')
<div class="container mt-5">
    <h1 class="text-center">Fornecedor</h1>
    <div class="text-right">
        <a href="{{ route('suppliers.create') }}" class="btn btn-primary mb-5">Adicionar Fornecedor 

        </a>
    </div>

    <livewire:supplier-table />
</div>
@endsection
