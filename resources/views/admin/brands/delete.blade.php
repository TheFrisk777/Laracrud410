@extends('layout.main_template')

@section('content')

@include('fragments.formstyles')

<form action="{{route("brand.destroy",$bra->id)}}" method="POST">
@method("DELETE")
@csrf
<h3>¿Estas seguro que quieres eliminar el producto {{$bra->brand}}?</h3>
<button><a href="{{route("brand.index")}}">No</a></button>
<button type="submit">Si</button>
</form>
@endsection