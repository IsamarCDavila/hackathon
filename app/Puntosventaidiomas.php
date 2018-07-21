<?php
namespace App;
use Illuminate\Database\Eloquent\Model;


class Puntosventaidiomas extends Model
{
   protected $table = "puntos_venta_idiomas";
   public $primaryKey = "id";
   protected $fillable = [
     'id_idioma',
     'nombre',
     'direccion',
     'horario',
     'restricciones',
     'slug'
    ];
    public $timestamps = false;
}
