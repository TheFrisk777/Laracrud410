@extends('layout.main_template')

@section('content')
<br>
<h2 class="text-center">Lista de Ventas</h2>
<br>
<a type="button" class="btn btn-primary" href="{{ route('sales.create') }}">Registrar Venta</a>
<br><br>
<table class="table table-success table-striped-columns">
    <thead>
        <tr>
            <th>ID Venta</th>
            <th>Cliente</th>
            <th>Producto</th>
            <th>Fecha de Venta</th>
            <th>Acciones</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($sales as $sale)
        <tr>
            <td>{{ $sale->sale_id }}</td>
            <td>{{ $sale->client->name}}</td>
            <td>{{ $sale->product->nameProducts}}</td>
            <td>{{ $sale->sale_date }}</td>
            <td>
                <a class="btn btn-primary" href="{{ route('sales.show', $sale) }}">
                    <i class="fa-solid fa-plus"></i>
                </a>
                <a class="btn btn-warning" href="{{ route('sales.edit', $sale) }}">
                    <i class="fa-solid fa-file-signature"></i>
                </a>
                <form action="{{ route('sales.destroy', $sale) }}" method="POST" style="display:inline-block;">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger" onclick="return confirm('¿Estás seguro de eliminar esta venta?')">
                        <i class="fa-solid fa-trash"></i>
                    </button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>

@endsection
