<?php
namespace App;
use Illuminate\Database\Eloquent\Model;


class VariacionRecetas extends Model
{
   protected $table = "variaciones_recetas";
   public $primaryKey = "id";
   protected $fillable = [
     'id_variacion',
     'id_receta',
     'id_producto'
    ];
    public $timestamps = false;
}
