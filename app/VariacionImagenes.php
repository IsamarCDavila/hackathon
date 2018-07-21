<?php
namespace App;
use Illuminate\Database\Eloquent\Model;


class VariacionImagenes extends Model
{
   protected $table = "variaciones_imagenes";
   public $primaryKey = "id";
   protected $fillable = [
     'id_variacion',
     'imagen'
    ];
    public $timestamps = false;
}
