<?php

namespace App\Http\Controllers;

use App\Models\Client;
use Illuminate\Http\Request;
use App\Models\Address;

class ClientController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $clients = Client::paginate(3);
        return view('admin.clients.index', compact('clients'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        $addresses = Address::pluck('id', 'street'); // Obtener direcciones disponibles
        return view('admin.clients.create', compact('addresses'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $validatedData = $request->validate([
            'name' => 'required|string|max:40',
            'last_name' => 'required|string|max:40',
            'second_last_name' => 'nullable|string|max:40',
            'email' => 'required|email|max:50|unique:clients,email',
            'phone' => 'nullable|numeric|min:10',
        ]);

        Client::create($validatedData); // Crear cliente con datos validados
        return to_route('clients.index')->with('status', 'Cliente Registrado');
    }

    /**
     * Display the specified resource.
     */
    public function show(Client $client)
    {
        //
        return view('admin.clients.show', compact('client'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Client $client)
    {
        //
        $addresses = Address::pluck('id', 'street'); // Obtener todas las direcciones
        return view('admin.clients.edit', compact('client', 'addresses'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Client $client)
    {
        //
        $validatedData = $request->validate([
            'name' => 'required|string|max:40',
            'last_name' => 'required|string|max:40',
            'second_last_name' => 'nullable|string|max:40',
            'email' => 'required|email|max:50|unique:clients,email,' . $client->id,
            'phone' => 'nullable|numeric|min:10',
        ]);

        $client->update($validatedData); // Actualizar cliente
        return to_route('clients.index')->with('status', 'Cliente Actualizado');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Client $client)
    {
        //
        $client->delete();
        return to_route('clients.index')->with('status','Cliente Eliminado');
    }
}
