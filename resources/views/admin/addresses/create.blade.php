@extends('layout.main_template')

@section('content')

@include('fragments.formstyles')
<br>
<h1 class="text-center">Creacion de Direccion</h1>
<br>
@if ($errors->any())
    @foreach ($errors->all() as $e)
        <div class="error">
            {{$e}}
        </div>
    @endforeach
@endif

<form action="{{route('addresses.store')}}" method="POST">
@csrf

    <label for="client_id">Id Cliente:</label>
    <input type="text" name="client_id">
    
    <label for="">Calle</label>
    <input type="text" name="street">

    <label for="">Num. Interior</label>
    <input type="text" name="internal_num">

    <label for="">Num. Exterior</label>
    <input type="text" name="external_num">

    <label for="">Colonia</label>
    <input type="text" name="neightbornhood">
    
    <label for="">Ciudad</label>
    <input type="text" name="town">

    <label for="">Estado</label>
    <input type="text" name="state">

    <label for="">Pais</label>
    <input type="text" name="country">

    <label for="">Codigo Postal</label>
    <input type="text" name="postal_code">

    <label for="">Referencias</label>
    <input type="text" name="references">

    <button type="submit">Registrar</button>

</form>
@endsection