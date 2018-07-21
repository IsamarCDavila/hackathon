<?php
namespace App;
use Illuminate\Database\Eloquent\Model;

class VariacionIdiomas extends Model
{
   protected $table = "variaciones_idiomas";
   public $primaryKey = "id";
   protected $fillable = [
     'id_variacion',
     'id_idioma',
     'nombre',
     'descripcion',
     'ingredientes',
     'presentacion'
    ];
    public $timestamps = false;
}
