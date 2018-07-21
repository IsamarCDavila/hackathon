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
use App\Receta;
use App\RecetaIdiomas;
use App\Variacion;
use App\VariacionRecetas;
use Funciones;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Input;

class RecetasController extends Controller
{
    public function __construct()
     {
         $this->middleware('auth');
     }
    public function index()
    {
      $recetas=Receta::join('recetas_idiomas','recetas_idiomas.id_receta','=','recetas.id')
      ->select(
         'recetas.id'
        ,'recetas.minutos_coccion'
        ,'recetas.numero_porciones'
        ,'recetas.imagen'
        ,'recetas.slug'
        ,'recetas.path_imagen'
        ,'recetas_idiomas.nombre'
        ,'recetas_idiomas.titulo'
        ,'recetas_idiomas.video'
        ,'recetas_idiomas.preparacion'
        ,'recetas_idiomas.palabras_clave'
        )
        // ->where('recetas_idiomas.id_idioma','=',1)
        ->get();

      return view('admin.recetas.recetas')
      ->with('recetas',$recetas);
    }
    public function crearreceta(Request $request){
      $sliderFormData = $request->all();
      $variaciones = $request->input('variaciones');

      $slug = str_replace(' ', '-', Funciones::clean_string($request->input('nombre_receta')));
      $receta = new Receta();
      if (Input::hasFile('img_receta'))
      {
        $path = $request->file('img_receta')->store('upload/recetas');
        Storage::disk('uploads')->put('recetas', $request->file('img_receta'));
        $receta->path_imagen=$path;
        $receta->imagen= $request->file('img_receta')->getClientOriginalName();
      }
      $receta->slug = $slug;
      $receta->save();
      $idreceta = $receta->id;

      $RecetaIdiomas = new RecetaIdiomas();
      $RecetaIdiomas->id_idioma=1;
      $RecetaIdiomas->nombre=$sliderFormData['nombre_receta'];
      $RecetaIdiomas->titulo = $sliderFormData['titulo_receta'];
      $RecetaIdiomas->video = $sliderFormData['urlvideo'];
      $RecetaIdiomas->id_receta = $idreceta;
      $RecetaIdiomas->save();

      if($variaciones)
      {
        foreach ($variaciones as $key => $value) {

          $producto = Variacion::where('id', '=', $value)->select('id_producto')->first();

          $VariacionRecetas  = new VariacionRecetas();
          $VariacionRecetas->id_variacion= $value;
          $VariacionRecetas->id_receta=$idreceta ;
          $VariacionRecetas->id_producto= $producto->id_producto;
          $VariacionRecetas->save();
        }
      }



      return redirect('admin/editreceta/'.$idreceta);

    }
    public function editreceta(Request $request, $id)
    {
      $receta = Receta::join('recetas_idiomas', 'recetas_idiomas.id_receta', '=', 'recetas.id')
        ->select('recetas.id'
            , 'recetas.path_imagen'
            ,'recetas.minutos_coccion'
            ,'recetas.numero_porciones'
            ,'recetas_idiomas.nombre'
            ,'recetas_idiomas.titulo'
            ,'recetas_idiomas.video'
            ,'recetas_idiomas.preparacion'
            ,'recetas_idiomas.ingredientes'
            ,'recetas_idiomas.tips'
          )
        ->where('recetas.id', '=', $id)
        ->where('recetas_idiomas.id_idioma', '=', 1)
        ->first();

      $receta_variaciones = VariacionRecetas::where('id_receta', '=', $id)->select('id_variacion')->get();

      $array_variaciones = [];

      foreach ($receta_variaciones as $key) {
        $array_variaciones[] = $key->id_variacion;
      }

      return view('admin.recetas.editreceta')
      ->with('request', $request)
      ->with('receta', $receta)
      ->with('array_variaciones', $array_variaciones)
      ->with('id', $id);

    }




    /**
     * Guardar datos de contacto
     *
     * @return \Illuminate\Http\Response
     */
     public function update($id,Request $request)
     {
       $sliderFormData = $request->all();
       $variaciones = $request->input('variaciones');

       $slug = str_replace(' ', '-', Funciones::clean_string($request->input('nombre_receta')));

       $receta = Receta::find($id);
       if (Input::hasFile('img_receta'))
       {
         $imagen_anterior = $receta->path_imagen;
         $path = $request->file('img_receta')->store('upload/recetas');
         Storage::disk('uploads')->put('recetas', $request->file('img_receta'));
         $receta->path_imagen=$path;
         $receta->imagen= $request->file('img_receta')->getClientOriginalName();

         File::delete($imagen_anterior);
       }
       $receta->minutos_coccion = $request->input('coccion_receta');
       $receta->numero_porciones = $request->input('porciones_receta');
       $receta->slug = $slug;
       $receta->save();

       $textos = RecetaIdiomas::where('id_receta', '=', $id)
       ->select('id')
       ->where('id_idioma', '=', 1)
       ->first();

       $RecetaIdiomas = RecetaIdiomas::find($textos->id);
       $RecetaIdiomas->nombre=$sliderFormData['nombre_receta'];
       $RecetaIdiomas->titulo = $sliderFormData['titulo_receta'];
       $RecetaIdiomas->video = $sliderFormData['video'];
       $RecetaIdiomas->ingredientes = $sliderFormData['ingredientes_preparacion_detallereceta'];
       $RecetaIdiomas->preparacion = $sliderFormData['modo_preparacion_detallereceta'];
       $RecetaIdiomas->tips = $sliderFormData['tips_preparacion_detallereceta'];
       $RecetaIdiomas->save();

       VariacionRecetas::where('id_receta', '=', $id)->delete();

       if($variaciones){
         foreach ($variaciones as $key => $value) {

           $producto = Variacion::where('id', '=', $value)->select('id_producto')->first();

           $VariacionRecetas  = new VariacionRecetas();
           $VariacionRecetas->id_variacion= $value;
           $VariacionRecetas->id_receta=$receta->id ;
           $VariacionRecetas->id_producto= $producto->id_producto;
           $VariacionRecetas->save();
         }
       }


       return redirect('/admin/recetas');
     }

}
