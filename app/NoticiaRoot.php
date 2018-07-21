<?php
namespace App;
use Illuminate\Database\Eloquent\Model;


class NoticiaRoot extends Model
{
   protected $table = "noticias";
   public $primaryKey = "id";
   protected $fillable = [
     'imagen',
     'es_destacado',
     'path_imagen',
     'id_pagina'
    ];
    public $timestamps = false;
}
