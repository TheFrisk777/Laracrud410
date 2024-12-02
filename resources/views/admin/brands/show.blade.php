@extends('layout.main_template')

@section('content')
<br>
<h1 class="text-center">Detalles de la Marca</h1>
<br>
<h3>Nombre de la Marca: {{$brand->$brand}}</h3>
<h3>Descripcion de la Marca: {{$brand->$descriptio}}</h3>
<!-- TODO Mostrar Imagen -->

@endsection