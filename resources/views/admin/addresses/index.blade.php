@extends('layout.main_template')
@section('content')
<br>
<h2>Index Address</h2>
<br>
<br>
<table class="table table-striped">
    <thead>
        <tr>
            <th>Id</th>
            <th>Calle</th>
            <th>Num. Interior</th>
            <th>Num. Exterior</th>
            <th>Colonia</th>
            <th>Ciudad</th>
            <th>Estado</th>
            <th>Pais</th>
            <th>Codigo Postal</th>
            <th>Referencias</th>
            <th>Acciones</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($addresses as $address)
        <tr>
            <td>{{$address->client_id}}</td>
            <td>{{$address->street}}</td>
            <td>{{$address->internal_num}}</td>
            <td>{{$address->external_num}}</td>
            <td>{{$address->neightbornhood}}</td>
            <td>{{$address->town}}</td>
            <td>{{$address->state}}</td>
            <td>{{$address->country}}</td>
            <td>{{$address->postal_code}}</td>
            <td>{{$address->references}}</td>
            <td></td>
        </tr>
        @endforeach
    </tbody>
</table>
@endsection
