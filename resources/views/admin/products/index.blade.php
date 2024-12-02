@extends('layout.main_template')
@section('content')
<br>
<h2>Index Productos</h2>
<br>
<a type="button" class="btn btn-primary" a href="{{route('products.create')}}">Crear Producto</a>
<a type="button" class="btn btn-primary" href="{{route('brand.create')}}">Crear Marca</a>
<a type="button" class="btn btn-primary" a href="{{route('brand.index')}}">Index Marcas</a>
<br>
<br>
<table class="table table-striped">
    <thead>
        <th>Nombre del Producto</th>
        <th>Marca</th>
        <th>Descripcion</th>
        <th>Cantidad</th>
        <th>Precio Unitario</th>
        <th>Imagen</th>
        <th>Acciones</th>
    </thead>
    <tbody> 
        @foreach ($products as $product)
        <tr>
            <td>{{$product->nameProducts}}</td>
            <td>{{$product->brand->brand}}</td>
            <td>{{$product->brand->description}}</td>
            <td>{{$product->stock}}</td>
            <td>{{$product->unit_price}}</td>
            <td><img src="/imagen/products/{{$product->imagen}}"width="60" alt="producto"></td>
            <td>
                <a class="btn btn-primary" href="{{route('products.show',$product)}}">
                    <i class="fa-solid fa-plus"></i>
                </a>
                
                <a type="button" class="btn btn-warning" href="{{route('products.edit',$product)}}">
                    <i class="fa-solid fa-file-signature"></i>
                </a>
                <a type="button" class="btn btn-danger" href="{{route('products.delete',$product)}}">
                    <i class="fa-solid fa-x"></i>
                </a>

            </td>
        </tr>
        @endforeach
    </tbody>
</table>

{{$products->links()}}

@endsection