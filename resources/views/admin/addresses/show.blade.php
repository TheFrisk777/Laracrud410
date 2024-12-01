@extends('layout.main_template')

@section('content')

<h1>Detalles de la Dirección</h1>
<h3>Calle: {{$address->street}}</h3>
<h3>Num. Interior: {{$address->internal_num}}</h3>
<h3>Num. Exterior: {{$address->external_num}}</h3>
<h3>Colonia: {{$address->neightbornhood}}</h3>
<h3>Ciudad: {{$address->town}}</h3>
<h3>Estado: {{$address->state}}</h3>
<h3>Pais: {{$address->country}}</h3>
<h3>Codigo Postal: {{$address->postal_code}}</h3>
<h3>Referencias: {{$address->references}}</h3>

<!-- TODO Mostrar Imagen -->

@endsection