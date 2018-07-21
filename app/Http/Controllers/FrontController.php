<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Input;
use Illuminate\Html\HtmlServiceProvider;
use App\Slider;
use DB;
use App\Puntosventa;
use App\Puntosventaidiomas;
use App\Producto;
use App\Receta;
use Mail;

class FrontController extends Controller
{
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }
    public function home()
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
        ,'url_tipo'
        )
        ->get();
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

          $noticias= DB::table('noticias_idiomas')
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

      $productos = Producto::join('productos_idiomas', 'productos_idiomas.id_producto', '=', 'productos.id')
      ->leftjoin('recetas', 'recetas.id','=', 'productos.id_receta')
      ->leftjoin('recetas_idiomas', 'recetas.id', '=', 'recetas_idiomas.id_receta')
      ->where('productos_idiomas.id_idioma', '=', 1)
      ->select(   'productos.id'
                , 'productos.icono'
                , 'productos.imagen_intro'
                , 'productos.imagen_fondo'
                , 'productos.icono_path'
                , 'productos.imagen_intro_path'
                , 'productos.imagen_fondo_path'
                , 'productos.slug'
                , 'productos_idiomas.nombre'
                , 'productos_idiomas.intro'
                , 'productos_idiomas.texto_boton'
                , 'productos_idiomas.texto_receta'
                , 'recetas.slug as slug_receta'
                , 'recetas_idiomas.video'
                , 'recetas.imagen as img_receta')
      ->get();

      $recetas = Receta::join('recetas_idiomas', 'recetas_idiomas.id_receta', '=', 'recetas.id')
        ->select('recetas.slug'
          , 'recetas.path_imagen'
          , 'recetas.minutos_coccion'
          , 'recetas.numero_porciones'
          , 'recetas.id'
          , 'recetas_idiomas.nombre'
          , 'recetas_idiomas.titulo'
          , 'recetas_idiomas.video'
          , 'recetas_idiomas.ingredientes'
          , 'recetas_idiomas.preparacion'
          )
        ->where('recetas_idiomas.id_idioma', '=',1)
        ->inRandomOrder()
        ->take(10)
        ->get();

      return view('front.vistas.home')
      ->with('sliders',$sliders)
      ->with('banners',$banners)
      ->with('noticias',$noticias)
      ->with('productos',$productos)
      ->with('recetas',$recetas);
    }
    public function saveimg(Request $request)
    {
      if (Input::hasFile('archivo'))
      {
        $path = $request->file('archivo')->store('upload/reclamaciones');
        Storage::disk('uploads')->put('reclamaciones', $request->file('archivo'));

        // $directorio = public_path() .'/upload/reclamaciones/';
        // $ruta= Funciones::saveFile('archivo', $directorio);
        return $path;
      }
      else {
        return 'false';
      }
    }
    public function nosotros()
    {
      $noticias= DB::table('noticias_idiomas')
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

      return view('front.vistas.nosotros')
      ->with('banners',$banners)
      ->with('noticias',$noticias);
    }
    public function productos()
    {
      $productos = Producto::join('productos_idiomas', 'productos_idiomas.id_producto', '=', 'productos.id')
      ->leftjoin('recetas', 'recetas.id','=', 'productos.id_receta')
      ->leftjoin('recetas_idiomas', 'recetas.id', '=', 'recetas_idiomas.id_receta')
      ->where('productos_idiomas.id_idioma', '=', 1)
      ->select(
                  'productos.id'
                , 'productos.icono'
                , 'productos.imagen_intro'
                , 'productos.imagen_fondo'
                , 'productos.icono_path'
                , 'productos.imagen_intro_path'
                , 'productos.imagen_fondo_path'
                , 'productos.slug'
                , 'productos_idiomas.nombre'
                , 'productos_idiomas.intro'
                , 'productos_idiomas.texto_boton'
                , 'productos_idiomas.texto_receta'
                , 'recetas.slug as slug_receta'
                , 'recetas_idiomas.video'
                , 'recetas.imagen as img_receta')
      ->get();

      $recetas = Receta::join('recetas_idiomas', 'recetas_idiomas.id_receta', '=', 'recetas.id')
        ->select('recetas.slug'
          , 'recetas.path_imagen'
          , 'recetas.minutos_coccion'
          , 'recetas.numero_porciones'
          , 'recetas.id'
          , 'recetas_idiomas.nombre'
          , 'recetas_idiomas.titulo'
          , 'recetas_idiomas.video'
          , 'recetas_idiomas.ingredientes'
          , 'recetas_idiomas.preparacion'
          )
        ->where('recetas_idiomas.id_idioma', '=',1)
        ->inRandomOrder()
        ->take(10)
        ->get();

      return view('front.vistas.productos')
      ->with('productos',$productos)
      ->with('recetas',$recetas);
    }
    public function recetas()
    {
      $data = [];
      $productos = Producto::join('productos_idiomas', 'productos_idiomas.id_producto','=','productos.id')
        ->select('productos.id', 'productos_idiomas.nombre')
        ->get();

      foreach ($productos as $key)
      {
        $recetas = Receta::join('recetas_idiomas', 'recetas_idiomas.id_receta', '=', 'recetas.id')
          ->join('variaciones_recetas', 'variaciones_recetas.id_receta', '=', 'recetas.id')
          ->select('recetas.slug'
            , 'recetas.path_imagen'
            , 'recetas.numero_porciones'
            , 'recetas.id'
            , 'recetas_idiomas.nombre'
            , 'recetas_idiomas.titulo'
            )
          ->where('variaciones_recetas.id_producto', '=', $key->id)
          ->where('recetas_idiomas.id_idioma', '=',1)
          ->groupBy('recetas.slug','recetas.path_imagen'
            , 'recetas.numero_porciones'
            , 'recetas.id'
            , 'recetas_idiomas.nombre'
            , 'recetas_idiomas.titulo')
          ->inRandomOrder()
          ->get();

        $data[$key->id] = $recetas;
      }
      return view('front.vistas.recetas')
        ->with('productos',$productos)
        ->with('data',$data);
    }
    public function puntosdeventa()
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

    $pines =DB::table('puntos_venta_idiomas')
    ->join('puntos_venta','puntos_venta.id',"=","puntos_venta_idiomas.id_puntosventa")
    ->whereIn('puntos_venta.mapa', [1,3])
    ->get();

    $jsonPines = array();


    foreach ($pines as $key)
    {
        $json = array(
        "name" =>$key->nombre,
        "location"=> array(
            "coordinates"=> array(
              "lat"=>$key->latitud,
              "lng"=>$key->longitud
            ),
            "full_address"=> $key->direccion
        ),
        "phone"=>$key->telefono,
        "type"=>array(
          "name"=>$key->tipo_marker,
          "slug"=>$key->tipo_marker,
        ),
        "lugar"=>$key->ciudad,
        "atencion"=>$key->horario,
        "restricciones"=>$key->restricciones,
        "distrito"=>$key->distrito,
        "place_id"=>$key->id_lugar,
        "prioridad"=>1
      );
      $jsonPines[]=$json;
    }
      // return $jsonPines;

      return view('front.vistas.puntosdeventa')
      ->with('banners',$banners)
      ->with('jsonPines',json_encode($jsonPines));
    }
    public function contacto()
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

      return view('front.vistas.contacto')
      ->with('banners',$banners);
    }
    public function puntoscanje()
    {
      $pines =DB::table('puntos_venta_idiomas')
      ->join('puntos_venta','puntos_venta.id',"=","puntos_venta_idiomas.id_puntosventa")
      ->whereIn('puntos_venta.mapa', [2,3])
      ->get();
      $jsonPines = array();


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

      foreach ($pines as $key)
      {
          $json = array(
          "name" =>$key->nombre,
          "location"=> array(
              "coordinates"=> array(
                "lat"=>$key->latitud,
                "lng"=>$key->longitud
              ),
              "full_address"=> $key->direccion
          ),
          "phone"=>$key->telefono,
          "type"=>array(
            "name"=>$key->tipo_marker,
            "slug"=>$key->tipo_marker,
          ),
          "lugar"=>$key->ciudad,
          "atencion"=>$key->horario,
          "restricciones"=>$key->restricciones,
          "distrito"=>$key->distrito,
          "place_id"=>$key->id_lugar,
          "prioridad"=>1
        );
        $jsonPines[]=$json;
      }

      // return $jsonPines;
      return view('front.vistas.puntoscanje')
      ->with('banners',$banners)
      ->with('jsonPines',json_encode($jsonPines));
    }
    public function sendmail(Request $request){
      $data= $request->all();
      // return $data;
      $tipo_cotizar_pavo= $request->input('tipo_cotizar_pavo');
      $tipo_cantidad_pavo=$request->input('tipo_cantidad_pavo');
      $pavo_input=$request->input('pavo-input');

      $tipo_cotizar_paneton= $request->input('tipo_cotizar_paneton');
      $tipo_cantidad_paneton=$request->input('tipo_cantidad_paneton');
      $paneton_input=$request->input('paneton-input');
      //

      $data = [
              'email_contacto' => $request->input('correo'),
              'email_destino' => 'guribe@san-fernando.com.pe',
              'name' => $request->input('nombre'),
              'apellidoP' => $request->input('apellidoP'),
              'ruc' => $request->input('ruc'),
              'razonsocial' => $request->input('razonsocial'),
              'mensaje' => $request->input('mensaje'),
              'email' => $request->input('email'),
              'telefono' => $request->input('telefono'),
              'lugar' => $request->input('lugar'),
              'tipo_cotizar_pavo'=> $request->input('tipo_cotizar_pavo'),
              'tipo_cantidad_pavo'=>$request->input('tipo_cantidad_pavo'),
              'pavo_input'=>$request->input('pavo-input'),

              'tipo_cotizar_paneton'=> $request->input('tipo_cotizar_paneton'),
              'tipo_cantidad_paneton'=> $request->input('tipo_cantidad_paneton'),
              'paneton_input'=> $request->input('paneton-input'),
            ];
      Mail::send('mail.mail_cotizacion', $data, function ($message) use ($data) {
          $message->to($data['email_destino'], 'San Fernando')->subject('San Fernando cotización ');
      });

      return view('front.includes.send_mail')->with('request', $request)
      ->with('tipo_cotizar_pavo',$tipo_cotizar_pavo)
      ->with('pavo_input',$pavo_input)
      ->with('tipo_cantidad_pavo',$tipo_cantidad_pavo)
      ->with('tipo_cotizar_paneton',$tipo_cotizar_paneton)
      ->with('paneton_input',$paneton_input)
      ->with('tipo_cantidad_paneton',$tipo_cantidad_paneton);

    }
    public function detalleproducto($slug='')
    {
      $producto = Producto::join('productos_idiomas', 'productos_idiomas.id_producto', '=', 'productos.id')
        ->select('productos.id'
                  , 'productos.icono'
                  , 'productos.imagen_fondo'
                  , 'productos.imagen_flotante'
                  , 'productos.icono_certificado1'
                  , 'productos.icono_certificado2'
                  , 'productos.icono_path'
                  , 'productos.imagen_fondo_path'
                  , 'productos.imagen_flotante_path'
                  , 'productos.icono_certificado1_path'
                  , 'productos.icono_certificado2_path'
                  , 'productos_idiomas.nombre'
                  , 'productos_idiomas.titulo_detalle'
                  , 'productos_idiomas.descripcion_detalle'
                  , 'productos_idiomas.titulo'
                  , 'productos_idiomas.descripcion'
                  , 'productos.slug'
                  )
        ->where('productos_idiomas.id_idioma', '=', 1)
        ->where('productos.slug', '=', $slug)
        ->first();

        $productos = Producto::join('productos_idiomas', 'productos_idiomas.id_producto', '=', 'productos.id')
        ->leftjoin('recetas', 'recetas.id','=', 'productos.id_receta')
        ->leftjoin('recetas_idiomas', 'recetas.id', '=', 'recetas_idiomas.id_receta')
        ->where('productos_idiomas.id_idioma', '=', 1)
        ->select(
                    'productos.id'
                  , 'productos.icono'
                  , 'productos.imagen_intro'
                  , 'productos.imagen_fondo'
                  , 'productos.icono_path'
                  , 'productos.imagen_fondo_path'
                  , 'productos.imagen_flotante_path'
                  , 'productos.icono_certificado1_path'
                  , 'productos.icono_certificado2_path'
                  , 'productos.slug'
                  , 'productos_idiomas.nombre'
                  , 'productos_idiomas.intro'
                  , 'productos_idiomas.texto_boton'
                  , 'productos_idiomas.texto_receta'
                  , 'recetas.slug as slug_receta'
                  , 'recetas_idiomas.video'
                  , 'recetas.imagen as img_receta')
        ->get();

        $recetas = Receta::join('recetas_idiomas', 'recetas_idiomas.id_receta', '=', 'recetas.id')
          ->select('recetas.slug'
            , 'recetas.path_imagen'
            , 'recetas.minutos_coccion'
            , 'recetas.numero_porciones'
            , 'recetas.id'
            , 'recetas_idiomas.nombre'
            , 'recetas_idiomas.titulo'
            , 'recetas_idiomas.video'
            , 'recetas_idiomas.ingredientes'
            , 'recetas_idiomas.preparacion'
            )
          ->where('recetas_idiomas.id_idioma', '=',1)
          ->inRandomOrder()
          ->take(10)
          ->get();


      return view('front.vistas.detalleproducto')
      ->with('productos',$productos)
      ->with('producto', $producto)
      ->with('recetas', $recetas);
    }
    public function noticias()
    {
      $noticias= DB::table('noticias_idiomas')
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
      return view('front.vistas.noticias')
      ->with('noticias',$noticias);
    }
    public function detallerecetas($slug='')
    {
      $receta = Receta::join('recetas_idiomas', 'recetas_idiomas.id_receta', '=', 'recetas.id')
        ->select('recetas.slug'
          , 'recetas.path_imagen'
          , 'recetas.minutos_coccion'
          , 'recetas.numero_porciones'
          , 'recetas.id'
          , 'recetas_idiomas.nombre'
          , 'recetas_idiomas.titulo'
          , 'recetas_idiomas.video'
          , 'recetas_idiomas.ingredientes'
          , 'recetas_idiomas.preparacion'
          )
        ->where('recetas_idiomas.id_idioma', '=',1)
        ->where('recetas.slug', '=',$slug)
        ->first();

      $recetas = Receta::join('recetas_idiomas', 'recetas_idiomas.id_receta', '=', 'recetas.id')
        ->select('recetas.slug'
          , 'recetas.path_imagen'
          , 'recetas.minutos_coccion'
          , 'recetas.numero_porciones'
          , 'recetas.id'
          , 'recetas_idiomas.nombre'
          , 'recetas_idiomas.titulo'
          , 'recetas_idiomas.video'
          , 'recetas_idiomas.ingredientes'
          , 'recetas_idiomas.preparacion'
          , 'recetas_idiomas.tips'
          )
        ->where('recetas_idiomas.id_idioma', '=',1)
        ->inRandomOrder()
        ->take(10)
        ->get();

      return view('front.vistas.detallereceta')
        ->with('receta', $receta)
        ->with('recetas', $recetas);
    }
    public function libroreclamos()
    {
      //mandar la variable para el ubigueo
      $departamento= DB::table('dat_departamento')
      ->select('*')
      ->get();
      return view('front.vistas.libroreclamos')
      ->with('departamento', $departamento);
    }
    public function provincia(Request $request){
      $id= $request->input('provincia');
      $provincia= DB::table('dat_provincia')
      ->select('*')
      ->where('id_departamento','=',$id)
      ->get();
      return $provincia;
    }

    public function distrito(Request $request){
      $id= $request->input('provincia');

      $distrito= DB::table('dat_distrito')
      ->select('*')
      ->where('id_provincia','=',$id)
      ->get();
      return $distrito;
    }
    public function detallevariedad()
    {
      return view('front.vistas.detallevariedad');
    }
    public function distribuidor()
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

      return view('front.vistas.distribuidor')
      ->with('banners',$banners);
    }


    /**
     * Guardar datos de contacto
     *
     * @return \Illuminate\Http\Response
     */
     public function institucionalhtml()
     {
         return redirect('nosotros');
     }
     public function cinahtml()
     {
         return redirect('receta');
     }
     public function navidad()
     {
         return redirect('puntosdecanje');
     }
}
