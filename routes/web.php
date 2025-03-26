<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoriaController;
use App\Http\Controllers\SubcategoriaController;
use App\Models\Subcategoria;


Route::get('/', function () { return view('welcome'); });

Route::get('/categorias', [CategoriaController::class,'index'])->name('categorias.index');

//subcategorias
Route::get('/categorias/{id_categoria}/subcategorias', [CategoriaController::class, 'showSubcategorias'])->name('categorias.subcategorias');


