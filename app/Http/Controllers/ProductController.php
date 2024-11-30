<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Brand;
use Illuminate\Http\Request;
use App\Http\Requests\Products\StoreRequest;
use App\Http\Requests\Products\UpdateRequest;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //$products = Product::get();
        $products = Product::paginate(3); // Paginar los resultados por 4 en 4
        return view('admin.products.index', compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {  
        $brands = Brand::pluck('id','brand');
        return view( 'admin.products.create',compact('brands'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreRequest $request)
    {
        //echo "Registro Realizado";
        //dd($request);
        $data=$request->all();
        if(isset($data["imagen"])){
            $data["imagen"]= $filename = time().".".$data["imagen"]->extension();
            $request->imagen->move(public_path("imagen/products"),$filename);
        }
        Product::create($data);
        return to_route('products.index')->with('status','Producto Registrado');
    }

    /**
     * Display the specified resource.
     */
    public function show(Product $product)
    {
        //echo "Show Productos";
        return view('admin.products.show', compact('product'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Product $product)
    {
        //echo "Edit Productos";
        $brands = Brand::pluck('id','brand');
        echo view('admin.products.edit', compact('brands','product'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateRequest $request, Product $product)
    {
        //echo "Update Productos";
        //Si el campo imagen tiene informacion
        $data=$request->all();
        if(isset($data["imagen"])){
            //Cambiar el nombre del archivo a cargar
            $data["imagen"]= $filename = time().".".$data["imagen"]->extension();
            //Guardar Imagen en la Carpeta Publica
            $request->imagen->move(public_path("imagen/products"),$filename);
        }
        $product->update($data);  // Actualizar los datos del producto
        return to_route('products.index')->with('status','Producto Actualizado');
    }

    public function delete(Product $product)
    {
        echo view('admin.products.delete', compact('product'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Product $product)
    {
        //echo "Destroy Productos";
        $product->delete();  // Eliminar el producto
        return to_route('products.index')->with('status','Producto Eliminado');
    }
}
