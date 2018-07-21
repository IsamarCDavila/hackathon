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
use App\Banner;

class BannerController extends Controller
{
    public function __construct()
    {
       $this->middleware('auth');
    }
    public function index()
    {
        $banners= DB::table('bloques')
        ->select(
          'id',
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
          )
          ->get();
         return view('admin.banners.banner')
         ->with('banners',$banners);
  }
    public function crearbanner(Request $request)
    {
      $sliderFormData = $request->all();
      $attributeNames = array(
        'titulo_newbanner'=> 'Título',
        'descripcion_newbanner'=> 'Descripción',
        'text_newbanner'=> 'Texto botón',
        'url_newbanner'=> 'Url botón',
        'subtitulo_newbanner'=> 'Subtítulo',
        'icono_newbanner'=> 'Icono',
        'img_newbanner'=> 'Imagen de fondo',
        'orden_newbanner'=> 'Orden',
        'ubicacion_newbanner'=> 'Ubicación',
      );
      $rules = [
        'titulo_newbanner'=> 'required',
        'descripcion_newbanner'=> '',
        'text_newbanner'=> '',
        'url_newbanner'=> '',
        'subtitulo_newbanner'=> '',
        'icono_newbanner'=> '',
        'img_newbanner'=> 'required',
        'ubicacion_newbanner'=> 'required',
        'orden_newbanner'=> 'required',
        'ubicacion_newbanner'=> 'required',
      ];

      $validation = Validator::make($request->all(), $rules);
      $validation->setAttributeNames($attributeNames);

      if($validation->fails())
      {
          return redirect()->back()->withErrors($validation)->withInput()->with('status', 'error_banner');
      }
      else {

        if( ($request->file('img_newbanner')) && ($request->file('icono_newbanner')) )
        {
          $validationRules = [
              'img_newbanner' => 'mimes:,png,gif,doc,jpg,jpeg',
              'icono_newbanner' => 'mimes:,png,gif,doc,jpg,jpeg'
          ];
           $path = $request->file('img_newbanner')->store('upload');
           $path_icono = $request->file('icono_newbanner')->store('upload');

           Storage::disk('uploads')->put('', $request->file('img_newbanner'));
           Storage::disk('uploads')->put('', $request->file('icono_newbanner'));
           $banner= new Banner;
           $banner->titulo= $sliderFormData['titulo_newbanner'];
           $banner->subtitulo= $sliderFormData['subtitulo_newbanner'];
           $banner->descripcion= $sliderFormData['descripcion_newbanner'];
           $banner->texto_boton= $sliderFormData['text_newbanner'];
           $banner->url_boton= $sliderFormData['url_newbanner'];
           $banner->icono= $sliderFormData['icono_newbanner'];
           $banner->path_icono= $path_icono;
           $banner->imagen_fondo= $sliderFormData['img_newbanner'];
           $banner->path_imagen= $path;
           $banner->orden= $sliderFormData['orden_newbanner'];
           $banner->ubicacion= $sliderFormData['ubicacion_newbanner'];

           // $banner->imagen_slider= $request->file('img_newbanner')->getClientOriginalName();

           $banner->save();
           return redirect('/banner');
      }
      if( $request->file('img_newbanner') )
      {
        $validationRules = [
            'img_newbanner' => 'mimes:,png,gif,doc,jpg,jpeg'
        ];
         $path = $request->file('img_newbanner')->store('upload');
         Storage::disk('uploads')->put('', $request->file('img_newbanner'));
         $banner= new Banner;
         $banner->titulo= $sliderFormData['titulo_newbanner'];
         $banner->subtitulo= $sliderFormData['subtitulo_newbanner'];
         $banner->descripcion= $sliderFormData['descripcion_newbanner'];
         $banner->texto_boton= $sliderFormData['text_newbanner'];
         $banner->url_boton= $sliderFormData['url_newbanner'];
         $banner->imagen_fondo= $sliderFormData['img_newbanner'];
         $banner->path_imagen= $path;
         $banner->orden= $sliderFormData['orden_newbanner'];
         $banner->ubicacion= $sliderFormData['ubicacion_newbanner'];
         // $banner->imagen_slider= $request->file('img_newbanner')->getClientOriginalName();

         $banner->save();
         return redirect('/banner');
    }


     }
    }
    public function cargarbanner(Request $request){
      $banner= DB::table('bloques')->where('id','=',$request->input('id'))
      ->get();
      return  $banner;
    }
    public function editarbanner(Request $request){
      $id= $request->input('id_banner');
      $banner= Banner::where('id','=',$id)
      ->first();
      $sliderFormData = $request->all();

      $attributeNames = array(
        'titulo_editbanner'=> 'Título',
        'descripcion_editbanner'=> 'Descripción',
        'text_editbanner'=> 'Texto botón',
        'url_editbanner'=> 'Url botón',
        'subtitulo_editbanner'=> 'Subtítulo',
        'icono_editbanner'=> 'Icono',
        'img_editbanner'=> 'Imagen de fondo',
        'orden_editbanner'=> 'Orden',
        'ubicacion_editbanner'=> 'Ubicación',
      );
      $rules = [
        'titulo_editbanner'=> 'required',
        'descripcion_editbanner'=> '',
        'text_editbanner'=> '',
        'url_editbanner'=> '',
        'subtitulo_editbanner'=> '',
        'icono_editbanner'=> '',
        'img_editbanner'=> '',
        'orden_editbanner'=> '',
        'ubicacion_editbanner'=> '',
      ];

      $validation = Validator::make($request->all(), $rules);
      $validation->setAttributeNames($attributeNames);

      if($validation->fails())
      {
          return redirect()->back()->withErrors($validation)->withInput()->with('status', 'error_banner_edit');
      }
      else {

        if( ($request->file('img_editbanner')) && ($request->file('icono_editbanner')) )
        {
          $validationRules = [
              'img_editbanner' => 'mimes:,png,gif,doc,jpg,jpeg',
              'icono_editbanner' => 'mimes:,png,gif,doc,jpg,jpeg'
          ];
           $path = $request->file('img_editbanner')->store('upload');
           $path_icono = $request->file('icono_editbanner')->store('upload');

           Storage::disk('uploads')->put('', $request->file('img_editbanner'));
           Storage::disk('uploads')->put('', $request->file('icono_editbanner'));

           $imagen_anterior = $banner->path_imagen;
           $icono_anterior = $banner->path_icono;

           $banner->titulo= $sliderFormData['titulo_editbanner'];
           $banner->subtitulo= $sliderFormData['subtitulo_editbanner'];
           $banner->descripcion= $sliderFormData['descripcion_editbanner'];
           $banner->texto_boton= $sliderFormData['text_editbanner'];
           $banner->url_boton= $sliderFormData['url_editbanner'];
           $banner->icono= $sliderFormData['icono_editbanner'];
           $banner->path_icono= $path_icono;
           $banner->imagen_fondo= $sliderFormData['img_editbanner'];
           $banner->path_imagen= $path;
           $banner->orden= $sliderFormData['orden_editbanner'];
           $banner->ubicacion= $sliderFormData['ubicacion_editbanner'];
           // $banner->imagen_slider= $request->file('img_editbanner')->getClientOriginalName();

           $banner->save();

           File::delete($imagen_anterior);
           File::delete($icono_anterior);

           return redirect('/banner');
      }
      if( $request->file('img_editbanner') )
      {
        $validationRules = [
            'img_editbanner' => 'mimes:,png,gif,doc,jpg,jpeg'
        ];
         $path = $request->file('img_editbanner')->store('upload');
         Storage::disk('uploads')->put('', $request->file('img_editbanner'));

         $imagen_anterior = $banner->path_imagen;

         $banner->titulo= $sliderFormData['titulo_editbanner'];
         $banner->subtitulo= $sliderFormData['subtitulo_editbanner'];
         $banner->descripcion= $sliderFormData['descripcion_editbanner'];
         $banner->texto_boton= $sliderFormData['text_editbanner'];
         $banner->url_boton= $sliderFormData['url_editbanner'];
         $banner->imagen_fondo= $sliderFormData['img_editbanner'];
         $banner->path_imagen= $path;
         $banner->orden= $sliderFormData['orden_editbanner'];
         $banner->ubicacion= $sliderFormData['ubicacion_editbanner'];
         // $banner->imagen_slider= $request->file('img_editbanner')->getClientOriginalName();
         $banner->save();

         File::delete($imagen_anterior);

         return redirect('/banner');
    }
    if( $request->file('icono_editbanner') )
    {
      $validationRules = [
          'icono_editbanner' => 'mimes:,png,gif,doc,jpg,jpeg'
      ];
       $path = $request->file('icono_editbanner')->store('upload');
       Storage::disk('uploads')->put('', $request->file('icono_editbanner'));

       $icono_anterior = $banner->path_icono;

       $banner->titulo= $sliderFormData['titulo_editbanner'];
       $banner->subtitulo= $sliderFormData['subtitulo_editbanner'];
       $banner->descripcion= $sliderFormData['descripcion_editbanner'];
       $banner->texto_boton= $sliderFormData['text_editbanner'];
       $banner->url_boton= $sliderFormData['url_editbanner'];
       $banner->icono= $sliderFormData['icono_editbanner'];
       $banner->path_icono= $path;
       $banner->orden= $sliderFormData['orden_editbanner'];
       $banner->ubicacion= $sliderFormData['ubicacion_editbanner'];
       // $banner->imagen_slider= $request->file('img_editbanner')->getClientOriginalName();
       $banner->save();

       File::delete($icono_anterior);
       
       return redirect('/banner');
  }
      if( (!$request->file('img_editbanner')) && (!$request->file('icono_editbanner')) ){
        $banner->titulo= $sliderFormData['titulo_editbanner'];
        $banner->subtitulo= $sliderFormData['subtitulo_editbanner'];
        $banner->descripcion= $sliderFormData['descripcion_editbanner'];
        $banner->texto_boton= $sliderFormData['text_editbanner'];
        $banner->url_boton= $sliderFormData['url_editbanner'];
        $banner->orden= $sliderFormData['orden_editbanner'];
        $banner->ubicacion= $sliderFormData['ubicacion_editbanner'];
        // $banner->imagen_fondo= $sliderFormData['img_editbanner'];
        // $banner->path_imagen= $path;

        $banner->save();
        return redirect('/banner');
      }

  }
}




    /**
     * Guardar datos de contacto
     *
     * @return \Illuminate\Http\Response
     */


}
