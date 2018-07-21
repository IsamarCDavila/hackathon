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
use App\Slider;

class SliderController extends Controller
{
  public function __construct()
   {
       $this->middleware('auth');
   }
    public function index()
    {
      $sliders= DB::table('slider')
      ->select(
        'id'
        ,'descripcion'
        ,'button_txt'
        ,'url_boton'
        ,'texto_background'
        ,'imagen_slider'
        ,'id_idioma'
        ,'path_imagen'
        )
        ->get();
      return view('admin.sliders.slider')
      ->with('sliders',$sliders);
    }
    public function crearslider(Request $request)
    {
      $sliderFormData = $request->all();
      $attributeNames = array(
        'descripcion_newslider' => 'Descripción',
        'text_newslider' => 'Nombre del botón',
        'url_newslider' => 'URL el botón',
        'textoback_newslider' =>'Texto background',
        'img_newslider' => 'Imagen slider',
      );
      $rules = [
        'descripcion_newslider' => 'required',
        'text_newslider' => 'required',
        'url_newslider' => 'required',
        'textoback_newslider' =>'required',
        'img_newslider' => 'required',
      ];

      if($request->file('img_newslider')){
        $validationRules = [
            'img_newslider' => 'mimes:,png,gif,doc,jpg,jpeg'
        ];
        $url_tipo = 0;
        if(isset($sliderFormData['url_tipo']))
        {
          $url_tipo = 1;
        }
      $validation = Validator::make($request->all(), $rules);
      $validation->setAttributeNames($attributeNames);
      if($validation->fails())
      {
          return redirect()->back()->withErrors($validation)->withInput()->with('status', 'error');
      }
      else {
        $path = $request->file('img_newslider')->store('upload');
        Storage::disk('uploads')->put('', $request->file('img_newslider'));
        $slider = new Slider;
        $slider->descripcion= $sliderFormData['descripcion_newslider'];
        $slider->button_txt= $sliderFormData['text_newslider'];
        $slider->url_boton= $sliderFormData['url_newslider'];
        $slider->texto_background= $sliderFormData['textoback_newslider'];
        $slider->url_tipo= $url_tipo;
        $slider->path_imagen= $path;
        $slider->imagen_slider= $request->file('img_newslider')->getClientOriginalName();

        $slider->id_idioma=1; //español por defecto
        $slider->save();
        return redirect('/slider');
      }
     }
     else{
       return redirect('/slider');
     }
    }
    public function cargar_slider(Request $request){
      $slider= DB::table('slider')->where('id','=',$request->input('id'))
      ->get();
      return  $slider;
    }
    public function editarslider(Request $request){
      $attributeNames = array(
        'descripcion_editslider' => 'Descripción',
        'text_editslider' => 'Nombre del botón',
        'url_editslider' => 'URL el botón',
        'textoback_editslider' =>'Texto background',
        // 'img_editslider' => 'Imagen slider',
      );
      $rules = [
        'descripcion_editslider' => '',
        'text_editslider' => '',
        'url_editslider' => '',
        'textoback_editslider' =>'',
        // 'img_newslider' => 'required',
      ];


      $id= $request->input('id_sl');
      $slider= Slider::where('id','=',$id)
      ->first();
       $sliderFormData = $request->all();

       $url_tipo = 0;
       if(isset($sliderFormData['url_tipo']))
       {
         $url_tipo = 1;
       }

        if(!$request->file('img_editslider'))
        {
          $validation = Validator::make($request->all(), $rules);
          $validation->setAttributeNames($attributeNames);
          if($validation->fails())
          {
              return redirect()->back()->withErrors($validation)->withInput()->with('status', 'error');
          }
          else {
          $slider->descripcion= $sliderFormData['descripcion_editslider'];
          $slider->button_txt= $sliderFormData['text_editslider'];
          $slider->url_boton= $sliderFormData['url_editslider'];
          $slider->texto_background= $sliderFormData['textoback_editslider'];
          $slider->url_tipo= $url_tipo;
          $slider->id_idioma=1; //español por defecto
          $slider->save();
          return redirect('/slider');
          }
        }
        else {

          if($request->file('img_editslider')){
             $validationRules = [
                 'img_editslider' => 'mimes:,png,gif,doc,jpg,jpeg'
             ];
           }
            $validation = Validator::make($request->all(), $rules);
            $validation->setAttributeNames($attributeNames);
            if($validation->fails())
            {
                return redirect()->back()->withErrors($validation)->withInput()->with('status', 'error');
            }
            else {

               $imagen_anterior = $slider->path_imagen;

               $path = $request->file('img_editslider')->store('upload');
               Storage::disk('uploads')->put('', $request->file('img_editslider'));
               $slider->descripcion= $sliderFormData['descripcion_editslider'];
               $slider->button_txt= $sliderFormData['text_editslider'];
               $slider->url_boton= $sliderFormData['url_editslider'];
               $slider->texto_background= $sliderFormData['textoback_editslider'];
               $slider->path_imagen= $path;
               $slider->imagen_slider= $request->file('img_editslider')->getClientOriginalName();
               $slider->id_idioma=1; //español por defecto
               $slider->url_tipo= $url_tipo;
               $slider->save();
               File::delete($imagen_anterior);

               return redirect('/slider');
            }
        }
  }




    /**
     * Guardar datos de contacto
     *
     * @return \Illuminate\Http\Response
     */


}
