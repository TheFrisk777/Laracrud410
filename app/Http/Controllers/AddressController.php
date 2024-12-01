<?php

namespace App\Http\Controllers;

use App\Models\Address;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AddressController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $addresses = Address::paginate(3); // Paginar los resultados por 4 en 4
        return view('admin.addresses.index', compact('addresses'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('admin.addresses.create');
        
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
    
        Address::create($request->all()); // Crear la dirección
        return to_route('addresses.index')->with('status', 'Dirección Registrada');
    }

    /**
     * Display the specified resource.
     */
    public function show(Address $address)
    {
        //
        //$address = Address::find($id);
        return view('admin.addresses.show', compact('address'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Address $address)
    {
        //
        $addresses = Address::pluck('id', 'street'); // Obtener todas las direcciones
        return view('admin.clients.edit', compact('address', 'addresses'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Address $address)
    {
        //
        $address->update($request->all()); // Actualizar cliente con datos validados
        return to_route('clients.index')->with('status', 'Direccion Actualizada');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Address $address)
    {
        //
        $address->delete(); // Eliminar cliente
        return to_route('clients.index')->with('status', 'Direccion Eliminada');
    }
}
