@extends('layout.main_template')

@section('content')

@include('fragments.formstyles')

<h1>Editar Direcciones</h1>

@if ($errors->any())
    @foreach ($errors->all() as $e)
        <div class="error">
            {{$e}}
        </div>
    @endforeach
@endif

<form action="{{route('addresses.update',$address->id)}}" method="POST">
@csrf
@method('PUT')
    <label for="">Id Cliente</label>
    <input type="text" name="client_id" value="{{$address->client_id}}">

    <label for="">Calle</label>
    <input type="text" name="street" value="{{$address->street}}">

    <label for="">Num. Interior</label>
    <input type="text" name="internal_num" value="{{$address->internal_num}}">

    <label for="">Num. Exterior</label>
    <input type="text" name="external_num" value="{{$address->external_num}}">

    <label for="">Colonia</label>
    <input type="text" name="neightbornhood" value="{{$address->neightbornhood}}">
    
    <label for="">Ciudad</label>
    <input type="text" name="town" value="{{$address->town}}">

    <label for="">Estado</label>
    <input type="text" name="state" value="{{$address->state}}">

    <label for="">Pais</label>
    <input type="text" name="country" value="{{$address->country}}">

    <label for="">Codigo Postal</label>
    <input type="text" name="postal_code" value="{{$address->postal_code}}">

    <label for="">Referencias</label>
    <input type="text" name="references" value="{{$address->references}}">

    <button type="submit">Registrar</button>

</form>
@endsection