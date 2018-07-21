<?php
namespace App;
use Illuminate\Database\Eloquent\Model;


class ProductoImagenes extends Model
{
   protected $table = "productos_imagenes";
   public $primaryKey = "id";
   protected $fillable = [
     'id_producto',
     'id_idioma',
     'nombre',
     'descripcion',
     'titulo',
     'descripcion2',
     'ingredientes',
     'presentacion'
    ];
    public $timestamps = false;
}
