@extends('layout.main_template')

@section('content')

@include('fragments.formstyles')

<form action="{{route("clients.destroy",$client->id)}}" method="POST">
@method("DELETE")
@csrf
<h3>¿Estas seguro que quieres eliminar el producto {{$client->name}}?</h3>
<a type="button" class="btn btn-success" href="{{route("clients.index")}}">No</a>
<button type="button" class="btn btn-danger">Si</button>
</form>
@endsection