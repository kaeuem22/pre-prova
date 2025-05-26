@extends('layouts.master')
@section('content')
<div class="container mt-5">
    <h1 class="text-center">Clientes</h1>
    <div class="text-right">
        <a href="{{ route('customers.create') }}" class="btn btn-primary mb-5">Adicionar Cliente</a>
    </div>

    <livewire:customer-table />
</div>
@endsection
