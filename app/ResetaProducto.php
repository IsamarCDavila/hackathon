<?php
namespace App;
use Illuminate\Database\Eloquent\Model;


class ResetaProducto extends Model
{
   protected $table = "recetas_productos";
   public $primaryKey = "id";
   protected $fillable = [
     'id_producto',
     'id_receta'
    ];
    public $timestamps = true;
}
