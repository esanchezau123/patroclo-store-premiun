<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Subcategoria extends Model
{
    use HasFactory;

    // Definir el nombre de la tabla en caso de que no sea la convención
    protected $table = 'subcategorias';

    // Si no estás utilizando las columnas de tiempo como created_at o updated_at
    public $timestamps = false;

    // Especificar las columnas que son asignables de manera masiva
    protected $fillable = [
        'id_categoria', 
        'nombre',
        'imagen_url',
        'estado_auditoria',
        'fecha_creacion_auditoria'
    ];

    // Relación con la tabla Categorias
    public function categoria()
    {
        return $this->belongsTo(Categoria::class, 'id_categoria');
    }
}
