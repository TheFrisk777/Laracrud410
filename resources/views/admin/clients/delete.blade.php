@extends('layout.main_template')

@section('content')

@include('fragments.formstyles')

<form action="{{route("clients.destroy",$client->id)}}" method="POST">
@method("DELETE")
@csrf
<h3>¿Estas seguro que quieres eliminar el producto {{$client->name}}?</h3>
<button><a href="{{route("clients.index")}}">No</a></button>
<button type="submit">Si</button>
</form>
@endsection