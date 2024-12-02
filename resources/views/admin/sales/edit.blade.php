@extends('layout.main_template')

@section('content')

@include('fragments.formstyles')
<br>
<h1 class="text-center">Editar una Venta</h1>
<br>
@if ($errors->any())
    @foreach ($errors->all() as $e)
        <div class="error">
            {{$e}}
        </div>
    @endforeach
@endif

<form action="{{route('sales.update', $sale->sale_id)}}" method="POST">
    @csrf
    @method('PUT')
    
    
    <label for="client_id">Cliente</label>
    <br>
    <select name="client_id">
        <option value="">Selecciona...</option>
        @foreach ($clients as $client)
            <option {{ $sale->client_id == $client->id ? 'selected' : '' }} value="{{ $client->id }}">
                {{ $client->name }} {{ $client->last_name }}
            </option>
        @endforeach
    </select>
    <br>

    <label for="product_id">Producto</label>
    <br>
    <select name="product_id">
        <option value="">Selecciona...</option>
        @foreach ($products as $product)
            <option {{ $sale->product_id == $product->id ? 'selected' : '' }} value="{{ $product->id }}">
                {{ $product->nameProducts}}
            </option>
        @endforeach
    </select>
    <br>

    <label for="sale_date">Fecha de Venta</label>
    <input type="date" name="sale_date" value="{{ $sale->sale_date }}">

    <button type="submit">Actualizar Venta</button>
</form>
@endsection
