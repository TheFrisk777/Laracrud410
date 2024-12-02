@extends('layout.main_template')

@section('content')
<br>
<h1 class="text-center">Detalles del Cliente</h1>
<br>
<h3>Nombre: {{$client->name}}</h3>
<h3>Primer Apellido: {{$client->last_name}}</h3>
<h3>Segundo Apellido: {{$client->second_last_name}}</h3>
<h3>Correo: {{$client->email}}</h3>
<h3>Telefono: {{$client->phone}}</h3>


<!-- TODO Mostrar Imagen -->

@endsection