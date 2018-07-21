<?php
namespace App;
use Illuminate\Database\Eloquent\Model;


class Banner extends Model
{
   protected $table = "bloques";
   public $primaryKey = "id";
   protected $fillable = [
    'id_pagina',
    'titulo',
    'descripcion',
    'texto_boton',
    'url_boton',
    'subtitulo',
    'icono',
    'imagen_fondo',
    'path_imagen',
    'path_icono',
    'ubicacion',
    'orden'
    ];
    public $timestamps = false;
}
