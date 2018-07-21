<?php
namespace App;
use Illuminate\Database\Eloquent\Model;


class Variacion extends Model
{
   protected $table = "variaciones";
   public $primaryKey = "id";
   protected $fillable = [
     'id_producto',
     'id_sello',
     'imagen_principal',
     'slug',
     'cotizacion',
     'imagen_principal_path',
     'palabras_clave',
    ];
    public $timestamps = false;
}
