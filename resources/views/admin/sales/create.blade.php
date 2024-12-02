@extends('layout.main_template')

@section('content')

@include('fragments.formstyles')
<br>
<h1 class="text-center">Registrar una Venta</h1>
<br>
@if ($errors->any())
    @foreach ($errors->all() as $e)
        <div class="error">
            {{$e}}
        </div>
    @endforeach
@endif

<form action="{{ route('sales.store') }}" method="POST">
    @csrf
    
    <label for="client_id">Cliente</label>
    <select name="client_id" id="client_id" required>
        <option value="" disabled selected>Seleccione un cliente</option>
        @foreach ($clients as $client)
            <option value="{{ $client->id }}">{{ $client->name }} {{ $client->last_name }}</option>
        @endforeach
    </select>
    
    <label for="product_id">Producto</label>
    <select name="product_id" id="product_id" required>
        <option value="" disabled selected>Seleccione un producto</option>
        @foreach ($products as $product)
            <option value="{{ $product->id }}">{{ $product->nameProducts}}</option>
        @endforeach
    </select>
    
    <label for="sale_date">Fecha de Venta</label>
    <input type="date" name="sale_date" id="sale_date" required>

    <button type="submit">Registrar Venta</button>
</form>

@endsection
