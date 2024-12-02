@extends('layout.main_template')

@section('content')

@include('fragments.formstyles')

<h1>Editar Productos</h1>

@if ($errors->any())
    @foreach ($errors->all() as $e)
        <div class="error">
            {{$e}}
        </div>
    @endforeach
@endif

<form action="{{route('brand.update',$brand->id)}}" method="POST">
    @csrf
    @method('PUT')
    <label for="">Nombre la Marca</label>
    <input type="text" name="brand" value="{{$brand->brand}}">

    <label for="">Descripcion de la Marca</label>
    <input type="text" name="description" value="{{$brand->description}}">

    <button type="submit">Actualizar</button>

</form>
@endsection