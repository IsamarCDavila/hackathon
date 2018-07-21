<?php
namespace App;
use Illuminate\Database\Eloquent\Model;


class Categoria extends Model
{
   protected $table = "categorias";
   public $primaryKey = "id";
   protected $fillable = [
     'icono'
    ,'imagen_intro'
    ,'url'
    ,'imagen_fondo'
    ,'imagen_flotante'
    ,'icono_certificado1'
    ,'icono_certificado2'
    ,'slug'
    ];
    public $timestamps = false;
}
