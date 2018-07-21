<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Validator;
use Illuminate\Html\HtmlServiceProvider;
use Conexiones;
use DB;
use Auth;
use App\Noticia;
use App\NoticiaRoot;

class NoticiaController extends Controller
{
    public function __construct()
   {
       $this->middleware('auth');
   }
    public function index()
    {
        $noticia= DB::table('noticias_idiomas')
        ->select(
          'noticias_idiomas.id',
          'noticias_idiomas.id_noticia',
          'noticias_idiomas.id_idioma',
          'noticias_idiomas.titulo',
          'noticias_idiomas.descripcion',
          'noticias_idiomas.video',
          'noticias_idiomas.intro',
          'noticias_idiomas.texto_imagen',
          'noticias_idiomas.created_at',
          'noticias.id',
          'noticias.path_imagen',
          'noticias.es_destacado'
          )

          ->join('noticias', 'noticias.id', '=', 'noticias_idiomas.id_noticia')
          ->get();
         return view('admin.noticias.noticias')
         ->with('noticias',$noticia);
  }
  public function newnoticia()
  {
    return view('admin.noticias.newnoticia');
  }
  public function crearnoticia(Request $request)
  {
    $sliderFormData = $request->all();
    $path = $request->file('img_newnoticia')->store('upload');
    Storage::disk('uploads')->put('', $request->file('img_newnoticia'));
    $noticia_padre= new NoticiaRoot;
    $noticia_padre->es_destacado= $sliderFormData['destacado_newnoticia'];
    $noticia_padre->path_imagen= $path;
    $noticia_padre->imagen=$request->file('img_newnoticia')->getClientOriginalName();
    $noticia_padre->save();

    $noticias= new Noticia;
    $noticias->id_noticia=$noticia_padre->id;
    $noticias->titulo=  $sliderFormData['titulo_newnoticia'];
    $noticias->descripcion= $sliderFormData['descripcion_newnoticia'];
    $noticias->video= $sliderFormData['urlvideo_newnoticia'];
    $noticias->intro=$sliderFormData['intro_newnoticia'];
    $noticias->id_idioma=1;
    $noticias->texto_imagen= $sliderFormData['textoimagen_newnoticia'];
    $noticias->save();

    return redirect('/noticias');
  }

  public function editnoticia($id)
  {
    $noticia= DB::table('noticias_idiomas')
    ->select(
      'noticias_idiomas.id',
      'noticias_idiomas.id_noticia',
      'noticias_idiomas.id_idioma',
      'noticias_idiomas.titulo',
      'noticias_idiomas.descripcion',
      'noticias_idiomas.video',
      'noticias_idiomas.intro',
      'noticias_idiomas.texto_imagen',
      'noticias_idiomas.created_at',
      'noticias.id',
      'noticias.path_imagen',
      'noticias.es_destacado'
      )

      ->join('noticias', 'noticias.id', '=', 'noticias_idiomas.id_noticia')
      ->where('id_noticia','=',$id)
      ->get();

    return view('admin.noticias.editnoticia')
    ->with('noticia',$noticia);
  }

  public function editarnoticia(Request $request,$id)
  {

    $sliderFormData = $request->all();

        if( $request->file('img_editnoticia') )
        {
          $noticias_root=NoticiaRoot::find($id);

          $imagen_anterior = $noticias_root->path_imagen;

          $noticias_root->es_destacado= $sliderFormData['destacado_editnoticia'];
          $path = $request->file('img_editnoticia')->store('upload');
          Storage::disk('uploads')->put('', $request->file('img_editnoticia'));
          $noticias_root->path_imagen= $path;
          $noticias_root->imagen=$request->file('img_editnoticia')->getClientOriginalName();
          $noticias_root->save();

          File::delete($imagen_anterior);

          DB::table('noticias_idiomas')->where('id', $id)->update(array(
          'titulo' =>  $sliderFormData['titulo_editnoticia']
          ,'descripcion' => $sliderFormData['descripcion_editnoticia']
          ,'video' => $sliderFormData['urlvideo_editnoticia']
          , 'intro' => $sliderFormData['intro_editnoticia']
          ,'texto_imagen' => $sliderFormData['textoimagen_editnoticia']
          ));

           return redirect('/noticias');
        }
        else{
          $noticias_root=NoticiaRoot::find($id);
          $noticias_root->es_destacado= $sliderFormData['destacado_editnoticia'];
          $noticias_root->save();
          DB::table('noticias_idiomas')->where('id', $id)->update(array(
          'titulo' =>  $sliderFormData['titulo_editnoticia']
          ,'descripcion' => $sliderFormData['descripcion_editnoticia']
          ,'video' => $sliderFormData['urlvideo_editnoticia']
          , 'intro' => $sliderFormData['intro_editnoticia']
          ,'texto_imagen' => $sliderFormData['textoimagen_editnoticia']
          ));
          return redirect('/noticias');
        }

  }
    /**
     * Guardar datos de contacto
     *
     * @return \Illuminate\Http\Response
     */


}
