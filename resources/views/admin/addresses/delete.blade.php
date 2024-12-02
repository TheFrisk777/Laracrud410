@extends('layout.main_template')

@section('content')

@include('fragments.formstyles')

<form action="{{route("addresses.destroy",$address->id)}}" method="POST">
@method("DELETE")
@csrf
<h3>¿Quieres Eliminar esta Dirección: {{$address->street}}?</h3>
<a type="button" class="btn btn-success" href="{{route("addresses.index")}}">No</a>
<button type="button" class="btn btn-danger">Si</button>
</form>
@endsection