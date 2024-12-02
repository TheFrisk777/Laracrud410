@extends('layout.main_template')

@section('content')
<br>
<h1 class="text-center">Detalles de la Venta</h1>
<br>
<h3>Id Venta: {{$sale->sale_id}}</h3>
<h3>Nombre del Cliente: {{$sale->client->name}}</h3>
<h3>Nombre del producto: {{$sale->product->nameProducts}}</h3>
<h3>Fecha de venta: {{$sale->sale_date}}</h3>

<!-- TODO Mostrar Imagen -->

@endsection