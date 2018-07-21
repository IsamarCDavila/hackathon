<?php
namespace App;
use Illuminate\Database\Eloquent\Model;


class Receta extends Model
{
   protected $table = "recetas";
   public $primaryKey = "id";
   protected $fillable = [
     'minutos_coccion'
    ,'numero_porciones'
    ,'imagen'
    ,'slug'
    ,'path_imagen'
    ];
    public $timestamps = false;
}
