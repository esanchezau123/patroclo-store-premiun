@extends('layouts.app')

@section('content')
<h1 class="text-center text-gray-800 text-2xl font-medium">Elige una categoria</h1>

<div class="flex flex-wrap justify-evenly mt-4 gap-4">
    @foreach($categorias as $categoria)
    <div class="bg-gray-200 hover:bg-gray-300 w-[320px] h-[280px] p-4 rounded-lg cursor-pointer flex flex-col items-center shadow-lg transition-transform transform hover:scale-105">
        <!-- Enlace a las subcategorías de cada categoría -->
        <a href="{{ route('categorias.subcategorias', ['id_categoria' => $categoria->id_categoria]) }}" class="w-full h-full">
            <img class="h-auto max-h-[220px] w-full object-contain rounded" src="{{ $categoria->imagen_url }}" alt="">
            <p class="text-center mt-3 font-medium text-gray-800">{{ $categoria->nombre }}</p>
        </a>
    </div>
    @endforeach
</div>

@endsection
