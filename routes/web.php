<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;

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
    
});

//Products
Route::get('/produtos', [ProductController::class, 'index'])->name('produtos.index');
Route::get('/produtos/create', [ProductController::class, 'create'])->name('produtos.create');
Route::get('/produtos/{product}/edit', [ProductController::class, 'edit'])->name('produtos.edit');
Route::get('/produtos/{product}', [ProductController::class, 'show'])->name('produtos.show');
Route::post('/produtos', [ProductController::class, 'store'])->name('produtos.store');
Route::put('/produtos/{product}', [ProductController::class, 'update'])->name('produtos.update');
Route::delete('/produtos/{product}', [ProductController::class, 'destroy'])->name('produtos.destroy');


require __DIR__.'/auth.php';