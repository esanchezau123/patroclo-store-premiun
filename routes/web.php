<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoriaController;
use App\Http\Controllers\SubcategoriaController;
use App\Models\Subcategoria;
use App\Http\Controllers\ProductoController;


Route::get('/', function () { return view('welcome'); });

Route::get('/categorias', [CategoriaController::class,'index'])->name('categorias.index');

//subcategorias
Route::get('/categorias/{id_categoria}/subcategorias', [CategoriaController::class, 'showSubcategorias'])->name('categorias.subcategorias');

//Productos
Route::get('/productos', [ProductoController::class, 'index'])->name('productos.index');

