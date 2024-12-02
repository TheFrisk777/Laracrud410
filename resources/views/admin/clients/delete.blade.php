@extends('layout.main_template')

@section('content')

@include('fragments.formstyles')
<br>
<h2 class="text-center">Eliminacion de Cliente</h2>
<br>
<form action="{{route("clients.destroy",$client->id)}}" method="POST">
@method("DELETE")
@csrf
<h3>¿Quieres Eliminar al Cliente: {{$client->name}}?</h3>
<a type="button" class="btn btn-success" href="{{route("clients.index")}}">No</a>
<button type="submit" class="btn btn-danger">Si</button>
</form>
@endsection