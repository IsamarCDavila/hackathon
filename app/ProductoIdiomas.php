<?php
namespace App;
use Illuminate\Database\Eloquent\Model;


class ProductoIdiomas extends Model
{
   protected $table = "productos_idiomas";
   public $primaryKey = "id";
   protected $fillable = [
    'id_producto'
   ,'id_idioma'
   ,'nombre'
   ,'intro'
   ,'texto_boton'
   ,'titulo_detalle'
   ,'descripcion_detalle'
   ,'titulo'
   ,'descripcion'
   ,'texto_receta'
    ];
    public $timestamps = false;
}
