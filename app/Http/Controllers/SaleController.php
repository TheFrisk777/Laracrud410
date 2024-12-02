<?php

namespace App\Http\Controllers;

use App\Models\Sale;
use App\Models\Client;
use App\Models\Product;
use Illuminate\Http\Request;

class SaleController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $sales = Sale::with(['client', 'product'])->paginate(5);
        return view('admin.sales.index', compact('sales'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        $clients = Client::all();
        $products = Product::all();
    
        return view('admin.sales.create', compact('clients', 'products'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        Sale::create($request->all());
        return to_route('sales.index')->with('status','Venta Registrada');
    }

    /**
     * Display the specified resource.
     */
    public function show(Sale $sale)
    {
        //

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Sale $sale)
    {
        //

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Sale $sale)
    {
        //
        $sale->update($request->all());
        return back()->with('status','Venta Actualizada');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Sale $sale)
    {
        //
        $sale->delete();
        return back()->with('status','Venta Eliminada');
    }
}
