@extends('layout.main_template')

@section('content')

@include('fragments.formstyles')

<form action="{{route("brand.destroy",$brand->id)}}" method="POST">
@method("DELETE")
@csrf
<h3>¿Quieres eliminar la Marca: {{$brand->brand}}?</h3>
<a type="button" class="btn btn-success" href="{{route("brand.index")}}">No</a>
<button type="button" class="btn btn-danger">Si</button>
</form>
@endsection