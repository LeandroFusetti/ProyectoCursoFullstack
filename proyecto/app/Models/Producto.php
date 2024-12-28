<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Producto extends Model
{
    protected $table = "productos";
    protected $primaryKey = "id";
    public $timestamps = false;
    protected $fillable = ["nombre","precio","direccionImagen","categoria_id"];

    public function categoria(): BelongsTo{
        return $this->belongsTo(Categoria::class, 'categoria_id', 'id_categoria');
    }

}
