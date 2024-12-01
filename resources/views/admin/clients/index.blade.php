@extends('layout.main_template')
@section('content')
<br>
<h2>Index Cliente</h2>
<br>
<a type="button" class="btn btn-primary" a href="{{route('clients.create')}}">Crear Cliente</a>
<a type="button" class="btn btn-primary" a href="{{route('addresses.index')}}">Index Direcciones</a>
<a type="button" class="btn btn-primary" a href="{{route('addresses.create')}}">Crear Direcciones</a>
<br>
<br>
<table class="table table-striped">
    <thead>
        <tr>
            <th>id Cliente</th>
            <th>Nombre</th>
            <th>Primer Apellido</th>
            <th>Segundo Apellido</th>
            <th>Email</th>
            <th>Telefono</th>
            <th>Acciones</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($clients as $client)
        <tr>
            <td>{{$client->id}}</td>
            <td>{{$client->name}}</td>
            <td>{{$client->last_name}}</td>
            <td>{{$client->second_last_name}}</td>
            <td>{{$client->email}}</td>
            <td>{{$client->phone}}</td>
            <td>
                <a class="btn btn-primary" href="{{route('clients.show',$client)}}">
                    <i class="fa-solid fa-plus"></i>
                </a>

                <a type="button" class="btn btn-warning" href="{{route('clients.edit',$client)}}">
                    <i class="fa-solid fa-file-signature"></i>
                </a>
                <form action="{{route('clients.destroy',$client)}}" method="POST">
                    @method("DELETE")
                    @csrf
                    <button type="button" class="btn btn-danger"><i class="fa-solid fa-circle-xmark"></i></button>
                </form>
            </td>
        </tr>
        </tr>
        @endforeach
    </tbody>
</table>
@endsection
