@extends('layout.main_template')

@section('content')
<br>
<h1 class="text-center">Detalles del Producto</h1>
<br>
<h3>Nombre del Producto: {{$product->nameProducts}}</h3>
<h3>Cantidad:            {{$product->stock}}</h3>
<h3>Precio Por Unidad:   {{$product->unit_price}}</h3>
<h3>Nombre de la Imagen: {{$product->imagen}}</h3>

<!-- TODO Mostrar Imagen -->

@endsection