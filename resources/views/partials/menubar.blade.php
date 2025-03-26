<div class="flex bg-orange-500 justify-center gap-3 h-[50px] items-center text-white font-semibold">
    <div class="hover:bg-orange-600 p-1 rounded cursor-pointer">
        <!-- Agregar enlace a Categorías -->
        <a href="{{ route('categorias.index') }}" class="text-white">Inicio</a>
    </div>
    <div class="hover:bg-orange-600 p-1 rounded cursor-pointer">
        <!-- Agregar enlace a Productos -->
        <a href="{{ route('productos.index') }}" class="text-white">Productos</a>
    </div>
    <div class="hover:bg-orange-600 p-1 rounded cursor-pointer">
        Marcas
    </div>
    <div class="hover:bg-orange-600 p-1 rounded cursor-pointer">
        Carrito
    </div>
</div>
