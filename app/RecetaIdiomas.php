<?php
namespace App;
use Illuminate\Database\Eloquent\Model;


class RecetaIdiomas extends Model
{
   protected $table = "recetas_idiomas";
   public $primaryKey = "id";
   protected $fillable = [
    'id_receta'
    ,'id_idioma'
    ,'nombre'
    ,'titulo'
    ,'video'
    ,'preparacion'
    ,'ingredientes'
    ,'tips'
    ,'palabras_clave'
    ];
    public $timestamps = false;
}
