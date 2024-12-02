@extends('layout.main_template')

@section('content')

@include('fragments.formstyles')
<br>
<h2 class="text-center">Eliminacion de Producto</h2>
<br>
<form action="{{route("products.destroy",$product->id)}}" method="POST">
@method("DELETE")
@csrf
<h3>¿Quieres Eliminar el Producto: {{$product->nameProducts}}?</h3>
<a type="button" class="btn btn-success" href="{{route("products.index")}}">No</a>
<button type="submit" >Si</button>
</form>
@endsection