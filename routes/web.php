<?php

use App\Http\Controllers\TestController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('index');  // Ruta de Bienvenida
})->name('index'); 

/*Route::get('/products', function () {
    return view('products_index');  // Ruta de Productos
})->name('products');

Route::get('/clients', function () {
    return view('clients_index');  // Ruta de Clientes
})->name('clients');

Route::get('/sales', function () {
    return view('sales_index');  // Ruta de Ventas
})->name('sales');*/
/*
Route::get('/indexProducts',[App\Http\Controllers\ProductController::class, 'index'])->name('products');

Route::get('/createProducts',[App\Http\Controllers\ProductController::class, 'create'])->name('pcreate');

Route::post('/storeProducts/{store}',[App\Http\Controllers\ProductController::class, 'store'])->name('pstore');

Route::get('/editProducts/{product}/edit',[App\Http\Controllers\ProductController::class, 'edit'])->name('pedit');

Route::put('/updateProducts/{product}',[App\Http\Controllers\ProductController::class, 'update'])->name('pupdate');

Route::get('/showProducts/{product}',[App\Http\Controllers\ProductController::class, 'show'])->name('pshow');

Route::delete('/destroyProducts/{product}',[App\Http\Controllers\ProductController::class, 'destroy'])->name('pdestroy');
*/

//Ruta Tipo Recursos para metodos REST, que permite crear las rutas para un CRUD de las 7 funciones de un controller
Route::resource('/products',App\Http\Controllers\ProductController::class);

Route::resource('/brand',App\Http\Controllers\BrandController::class);

Route::get('/brand/{brand}/delete',[App\Http\Controllers\BrandController::class, 'delete'])->name('brand.delete');

Route::get('/products/{product}/delete',[App\Http\Controllers\ProductController::class, 'delete'])->name('products.delete');

Route::resource('/clients',App\Http\Controllers\ClientController::class);

Route::resource('/sales',App\Http\Controllers\SaleController::class);

Route::get('/sales/{sale}/delete',[App\Http\Controllers\SaleController::class, 'delete'])->name('sales.delete');

Route::get('/clients/{client}/delete',[App\Http\Controllers\ClientController::class, 'delete'])->name('clients.delete');

Route::resource('/addresses',App\Http\Controllers\AddressController::class);

Route::get('/addresses/{address}/delete',[App\Http\Controllers\AddressController::class, 'delete'])->name('addresses.delete');