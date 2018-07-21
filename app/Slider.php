<?php
namespace App;
use Illuminate\Database\Eloquent\Model;


class Slider extends Model
{
   protected $table = "slider";
   public $primaryKey = "id";
   protected $fillable = [
    'descripcion',
    'button_txt',
    'url_boton',
    'texto_background',
    'imagen_slider',
    'id_idioma',
    'path_imagen',
    'url_tipo'
    ];
    public $timestamps = false;
}
