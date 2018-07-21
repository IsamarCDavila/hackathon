<?php
namespace App;
use Illuminate\Database\Eloquent\Model;


class Puntosventa extends Model
{
   protected $table = "puntos_venta";
   public $primaryKey = "id";
   protected $fillable = [
     'ciudad',
     'distrito',
     'lugar',
     'latitud',
     'longitud',
     'permite_canjes',
     'mapa',
     'tipo_marker',
     'id_lugar',
     'telefono'
    ];
    public $timestamps = false;
}
