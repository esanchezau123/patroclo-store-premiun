<?php

namespace App\Http\Controllers;
use App\Models\Categoria;
use Illuminate\Http\Request;
use App\Models\Subcategoria;

class CategoriaController extends Controller
{
    public function index() {
        $categorias = Categoria::all();
        return view('categorias', compact('categorias'));
    }
    public function showSubcategorias($id_categoria)
{
    // Obtén las subcategorías relacionadas con la categoría seleccionada
    $subcategorias = Subcategoria::where('id_categoria', $id_categoria)->get();

    // Retorna la vista con las subcategorías
    return view('subcategorias.index', compact('subcategorias'));
}
}


