@extends('layout.main_template')

@section('content')

@include('fragments.formstyles')

<h1>Editar Cliente</h1>
<form action="{{route('clients.update',$client->id)}}" method="POST">
@csrf
@method('PUT')
    <label for="">Nombre del Cliente</label>
    <input type="text" name="name" value="{{$client->name}}">

    <label for="">Primer Apellido</label>
    <input type="text" name="last_name" value="{{$client->last_name}}">

    <label for="">Segundo Apellido</label>
    <input type="text" name="second_last_name" value="{{$client->second_last_name}}">

    <label for="">Correo</label>
    <input type="email" name="email" value="{{$client->email}}">

    <label for="">Telefono</label>
    <input type="text" name="phone" value="{{$client->phone}}">

    <button type="submit">Registrar</button>

</form>
@endsection