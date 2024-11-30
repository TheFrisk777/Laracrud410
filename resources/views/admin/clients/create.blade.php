@extends('layout.main_template')

@section('content')

@include('fragments.formstyles')

<h1>Crear un Cliente</h1>

@if ($errors->any())
    @foreach ($errors->all() as $e)
        <div class="error">
            {{$e}}
        </div>
    @endforeach
@endif

<form action="{{route('clients.store')}}" method="POST">
    @csrf
        <label for="">Nombre del Cliente</label>
        <input type="text" name="name">
        
        <label for="">Primer Apellido</label>
        <input type="text" name="last_name">
    
        <label for="">Segundo Apellido</label>
        <input type="text" name="second_last_name">

        <label for="">Email</label>
        <input type="email" name="email">

        <label for="">Telefono</label>
        <input type="text" name="phone">

        <button type="submit">Registrar</button>
    
    </form>
    @endsection