<?php
namespace App;
use Illuminate\Database\Eloquent\Model;


class Noticia extends Model
{
   protected $table = "noticias_idiomas";
   public $primaryKey = "id";
   protected $fillable = [
     'id_noticia',
     'id_idioma',
     'titulo',
     'descripcion',
     'video',
     'intro',
     'texto_imagen',
     'created_at'
    ];
    public $timestamps = true;
}
