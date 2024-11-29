@extends('layout.main_template')
@section('content')
<h2>Index Productos</h2>
<button>
    <a href="{{route('products.create')}}">Crear Producto</a>
</button>
<button>
    <a href="{{route('brand.create')}}">Crear Marca</a>
</button>
<button>
    <a href="{{route('brand.index')}}">Index Marcas</a>
</button>
<table class="table table-striped">>
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
                
                <button><a href="{{route('products.edit',$product)}}">Editar</a></button>
                <form action="{{route('products.destroy',$product)}}" method="POST">
                    @method("DELETE")
                    @csrf
                    <button type="submit">Eliminar</button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>

{{$products->links()}}

@endsection