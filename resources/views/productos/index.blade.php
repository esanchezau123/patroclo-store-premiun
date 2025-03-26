@extends('layouts.app')

@section('content')
<h1 class="text-center text-gray-800 text-2xl font-medium">Lista de Productos</h1>

<div class="flex flex-wrap justify-evenly mt-4 gap-4">
    @foreach($productos as $producto)
    <div class="bg-gray-200 hover:bg-gray-300 w-[320px] h-[350px] p-4 rounded-lg cursor-pointer flex flex-col items-center shadow-lg transition-transform transform hover:scale-105">
        <img class="h-auto max-h-[220px] w-full object-contain rounded" src="{{ $producto->imagen_url }}" alt="{{ $producto->nombre }}">
        <p class="text-center mt-3 font-medium text-gray-800">{{ $producto->nombre }}</p>
        <p class="text-center text-gray-600">${{ $producto->precio_dolares }}</p>
    </div>
    @endforeach
</div>

<a href="{{ route('categorias.index') }}" class="inline-block px-6 py-3 mt-6 bg-blue-600 text-white rounded-full text-lg font-semibold hover:bg-blue-700 transition duration-300 ease-in-out shadow-lg transform hover:scale-105">
    Ir a Categorías
</a>
@endsection
