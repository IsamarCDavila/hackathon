<?php
namespace App;
use Illuminate\Database\Eloquent\Model;


class VariacionNutrientes extends Model
{
   protected $table = "variaciones_nutrientes";
   public $primaryKey = "id";
   protected $fillable = [
      'id_nutriente'
     ,'id_variacion'
     ,'cantidad'
    ];
    public $timestamps = false;
}
