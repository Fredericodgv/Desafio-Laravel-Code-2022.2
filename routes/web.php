<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\InventoryController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::middleware(['auth', 'verified'])->group(function () {

    // >>> insira suas rotas aqui !!!!! <<<
    
    Route::get('/', function () {
        return view('dashboard');
    })/*->middleware('auth')*/;
    
    Route::get('/dashboard', function () {
        return view('dashboard');
    })/*->middleware(['auth'])*/->name('dashboard');


    //Products
Route::get('/produtos', [ProductController::class, 'index'])->name('products.index');
Route::get('/produtos/create', [ProductController::class, 'create'])->name('products.create');
Route::get('/produtos/{product}/edit', [ProductController::class, 'edit'])->name('products.edit');
Route::get('/produtos/{product}', [ProductController::class, 'show'])->name('products.show');
Route::post('/produtos', [ProductController::class, 'store'])->name('products.store');
Route::put('/produtos/{product}', [ProductController::class, 'update'])->name('products.update');
Route::delete('/produtos/{product}', [ProductController::class, 'destroy'])->name('products.destroy');

    //Inventory
Route::get('/estoque', [InventoryController::class, 'index'])->name('inventory.index');
Route::get('/estoque/create', [InventoryController::class, 'create'])->name('inventory.create');
Route::get('/estoque/{inventory}/edit', [InventoryController::class, 'edit'])->name('inventory.edit');
Route::get('/estoque/{inventory}', [InventoryController::class, 'show'])->name('inventory.show');
Route::post('/estoque', [InventoryController::class, 'store'])->name('inventory.store');
Route::put('/estoque/{inventory}', [InventoryController::class, 'update'])->name('inventory.update');
Route::delete('/estoque/{inventory}', [InventoryController::class, 'destroy'])->name('inventory.destroy');

    
});



require __DIR__.'/auth.php';