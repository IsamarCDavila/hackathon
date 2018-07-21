<?php
namespace App;
use Illuminate\Database\Eloquent\Model;


class Nutrientes extends Model
{
   protected $table = "nutrientes";
   public $primaryKey = "id";
   protected $fillable = [
      'nombre_es'
     ,'nombre_en'
     ,'unidad'
    ];
    public $timestamps = false;
}
