@extends('layout.main_template')

@section('content')

@include('fragments.formstyles')

<form action="{{route("addresses.destroy",$address->id)}}" method="POST">
@method("DELETE")
@csrf
<h3>¿Estas seguro que quieres eliminar el producto {{$address->street}}?</h3>
<button><a href="{{route("addresses.index")}}">No</a></button>
<button type="submit">Si</button>
</form>
@endsection