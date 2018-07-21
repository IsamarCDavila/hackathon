<?php
namespace App;
use Illuminate\Database\Eloquent\Model;


class Producto extends Model
{
   protected $table = "productos";
   public $primaryKey = "id";
   protected $fillable = [
     'icono'
    , 'imagen_intro'
    , 'url'
    , 'imagen_fondo'
    ,'imagen_flotante'
    ,'icono_certificado1'
    ,'icono_certificado2'
    ,'id_receta'
    ,'icono_path'
    , 'imagen_intro_path'
    , 'imagen_fondo_path'
    , 'imagen_flotante_path'
    , 'icono_certificado1_path'
    , 'icono_certificado2_path'
    ,'slug'
    ];
    public $timestamps = false;
}
