@extends('layout.main_template')
@section('content')
<br>
<h2>Index Cliente</h2>
<br>
<a type="button" class="btn btn-primary" a href="{{route('clients.create')}}">Crear Cliente</a>
<br>
<br>
<table class="table table-striped">
    <thead>
        <tr>
            <th>Nombre</th>
            <th>Primer Apellido</th>
            <th>Segundo Apellido</th>
            <th>Email</th>
            <th>Telefono</th>
            <th>Acciones</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($clients as $cli)
        <tr>
            <td>{{$cli->name}}</td>
            <td>{{$cli->first_lastname}}</td>
            <td>{{$cli->second_lastname}}</td>
            <td>{{$cli->email}}</td>
            <td>{{$cli->phone}}</td>
            <td>
                <a href="{{route('client.edit',$cli)}}">Editar</a> |
                <form action="{{route('client.destroy',$cli)}}" method="POST">
                    @method('DELETE')
                    @csrf
                    <button type="submit">Eliminar</button>
                </form>
            </td>
        </tr>
        </tr>
        @endforeach
    </tbody>
</table>
@endsection
