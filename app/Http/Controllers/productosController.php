<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Producto;
use App\ProductoIdiomas;
use App\Idioma;
use App\Receta;
use Funciones;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Validator;
use Illuminate\Html\HtmlServiceProvider;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Input;

class productosController extends Controller
{
  public function __construct()
 {
     $this->middleware('auth');
 }
  public function index()
  {
    $productos = Producto::join('productos_idiomas', 'productos_idiomas.id_producto', '=', 'productos.id')
    ->select('productos.id', 'productos.icono_path', 'productos_idiomas.nombre')
    ->where('productos_idiomas.id_idioma', '=', 1)
    ->get();

    return view('admin.productos.producto')
      ->with('productos', $productos);
  }

  public function create()
  {
    $idiomas = Idioma::pluck('idioma', 'id');



    return view('admin.productos.newproducto')
      ->with('idiomas', $idiomas);
  }
  public function store(Request $request)
  {
    $directorio = public_path() .'/upload/productos/';
    $producto = new Producto();

    if (Input::hasFile('icono'))
    {
      $path = $request->file('icono')->store('upload/productos');
      Storage::disk('uploads')->put('productos', $request->file('icono'));
      $producto->icono_path=$path;
      $producto->icono= $request->file('icono')->getClientOriginalName();
    }
    if (Input::hasFile('imagen_intro'))
    {
      $path = $request->file('imagen_intro')->store('upload/productos');
      Storage::disk('uploads')->put('productos', $request->file('imagen_intro'));
      $producto->imagen_intro_path=$path;
      $producto->imagen_intro= $request->file('imagen_intro')->getClientOriginalName();
    }
    if (Input::hasFile('imagen_fondo'))
    {
      $path = $request->file('imagen_fondo')->store('upload/productos');
      Storage::disk('uploads')->put('productos', $request->file('imagen_fondo'));
      $producto->imagen_fondo_path=$path;
      $producto->imagen_fondo= $request->file('imagen_fondo')->getClientOriginalName();
    }
    if (Input::hasFile('imagen_flotante'))
    {
      $path = $request->file('imagen_flotante')->store('upload/productos');
      Storage::disk('uploads')->put('productos', $request->file('imagen_flotante'));
      $producto->imagen_flotante_path=$path;
      $producto->imagen_flotante= $request->file('imagen_flotante')->getClientOriginalName();
    }
    if (Input::hasFile('icono_certificado1'))
    {
      $path = $request->file('icono_certificado1')->store('upload/productos');
      Storage::disk('uploads')->put('productos', $request->file('icono_certificado1'));
      $producto->icono_certificado1_path=$path;
      $producto->icono_certificado1= $request->file('icono_certificado1')->getClientOriginalName();
    }
    if (Input::hasFile('icono_certificado2'))
    {
      $path = $request->file('icono_certificado2')->store('upload/productos');
      Storage::disk('uploads')->put('productos', $request->file('icono_certificado2'));
      $producto->icono_certificado2_path=$path;
      $producto->icono_certificado2= $request->file('icono_certificado2')->getClientOriginalName();
    }
    $producto->slug = str_replace(' ', '-', Funciones::clean_string($request->input('nombre_es_newproducto')));
    $producto->save();

    $producto_idioma = new ProductoIdiomas();
    $producto_idioma->id_producto = $producto->id;
    $producto_idioma->id_idioma = 1;
    $producto_idioma->intro = $request->input('intro_es_newproducto');
    $producto_idioma->texto_boton = $request->input('texto_boton_es');
    $producto_idioma->titulo_detalle = $request->input('titulo_detalle_es');
    $producto_idioma->descripcion_detalle = $request->input('descripcion_detalle_es');
    $producto_idioma->titulo = $request->input('titulo_es_newproducto');
    $producto_idioma->descripcion = $request->input('descripcion_es_newproducto');
    $producto_idioma->texto_receta = $request->input('descripcion_es_receta');
    $producto_idioma->nombre = $request->input('nombre_es_newproducto');
    $producto_idioma->save();

    return redirect('admin/productos');
  }
  public function edit($id)
  {
    $path_productos = url('/upload/productos/');
    $path_recetas = url('/upload/recetas/');

    $recetas = Receta::join('recetas_idiomas', 'recetas_idiomas.id_receta', '=', 'recetas.id')
      ->join('variaciones_recetas', 'variaciones_recetas.id_receta', '=', 'recetas.id')
      ->where('variaciones_recetas.id_producto', '=',  $id)
      ->where('recetas_idiomas.id_idioma', '=', 1)
      ->select('recetas.imagen', 'variaciones_recetas.id_receta', 'recetas_idiomas.titulo', 'recetas.numero_porciones')
      ->get();

    $producto = Producto::join('productos_idiomas', 'productos_idiomas.id_producto', '=', 'productos.id')
      ->select('productos.id'
                , 'productos.icono'
                , 'productos.imagen_intro'
                , 'productos.imagen_fondo'
                , 'productos.imagen_flotante'
                , 'productos.icono_certificado1'
                , 'productos.icono_certificado2'
                , 'productos.icono_path'
                , 'productos.imagen_intro_path'
                , 'productos.imagen_fondo_path'
                , 'productos.imagen_flotante_path'
                , 'productos.icono_certificado1_path'
                , 'productos.icono_certificado2_path'
                , 'productos.id_receta'
                , 'productos_idiomas.id as idprodidioma'
                , 'productos_idiomas.nombre'
                , 'productos_idiomas.intro'
                , 'productos_idiomas.texto_boton'
                , 'productos_idiomas.titulo_detalle'
                , 'productos_idiomas.descripcion_detalle'
                , 'productos_idiomas.titulo'
                , 'productos_idiomas.descripcion'
                , 'productos_idiomas.texto_receta'
                )
      ->where('productos_idiomas.id_idioma', '=', 1)
      ->where('productos.id', '=', $id)
      ->first();

    return view('admin.productos.editproducto')
          ->with('path_productos', $path_productos)
          ->with('path_recetas', $path_recetas)
          ->with('recetas', $recetas)
          ->with('producto', $producto);
  }
  public function update($id, Request $request)
  {
    $directorio = public_path() .'/upload/productos/';
    $producto = Producto::find($id);

    if (Input::hasFile('icono'))
    {
      $imagen_anterior = $producto->icono_path;

      $path = $request->file('icono')->store('upload/productos');
      Storage::disk('uploads')->put('productos', $request->file('icono'));
      $producto->icono_path=$path;
      $producto->icono= $request->file('icono')->getClientOriginalName();

      File::delete($imagen_anterior);
    }
    if (Input::hasFile('imagen_intro'))
    {
      $imagen_anterior = $producto->imagen_intro_path;

      $path = $request->file('imagen_intro')->store('upload/productos');
      Storage::disk('uploads')->put('productos', $request->file('imagen_intro'));
      $producto->imagen_intro_path=$path;
      $producto->imagen_intro= $request->file('imagen_intro')->getClientOriginalName();

      File::delete($imagen_anterior);
    }
    if (Input::hasFile('imagen_fondo'))
    {
      $imagen_anterior = $producto->imagen_fondo_path;

      $path = $request->file('imagen_fondo')->store('upload/productos');
      Storage::disk('uploads')->put('productos', $request->file('imagen_fondo'));
      $producto->imagen_fondo_path=$path;
      $producto->imagen_fondo= $request->file('imagen_fondo')->getClientOriginalName();

      File::delete($imagen_anterior);
    }
    if (Input::hasFile('imagen_flotante'))
    {
      $imagen_anterior = $producto->imagen_flotante_path;

      $path = $request->file('imagen_flotante')->store('upload/productos');
      Storage::disk('uploads')->put('productos', $request->file('imagen_flotante'));
      $producto->imagen_flotante_path=$path;
      $producto->imagen_flotante= $request->file('imagen_flotante')->getClientOriginalName();

      File::delete($imagen_anterior);
    }
    if (Input::hasFile('icono_certificado1'))
    {
      $imagen_anterior = $producto->icono_certificado1_path;

      $path = $request->file('icono_certificado1')->store('upload/productos');
      Storage::disk('uploads')->put('productos', $request->file('icono_certificado1'));
      $producto->icono_certificado1_path=$path;
      $producto->icono_certificado1= $request->file('icono_certificado1')->getClientOriginalName();

      File::delete($imagen_anterior);
    }
    if (Input::hasFile('icono_certificado2'))
    {
      $imagen_anterior = $producto->icono_certificado2_path;

      $path = $request->file('icono_certificado2')->store('upload/productos');
      Storage::disk('uploads')->put('productos', $request->file('icono_certificado2'));
      $producto->icono_certificado2_path=$path;
      $producto->icono_certificado2= $request->file('icono_certificado2')->getClientOriginalName();

      File::delete($imagen_anterior);
    }
    $producto->id_receta = $request->input('idreceta');
    $producto->slug = str_replace(' ', '-', Funciones::clean_string($request->input('nombre_es_newproducto')));
    $producto->save();

    $id_prod_idioma = $request->input('idprodidioma_es');
    $producto_idioma = ProductoIdiomas::find($id_prod_idioma);
    $producto_idioma->intro = $request->input('intro_es_newproducto');
    $producto_idioma->texto_boton = $request->input('texto_boton_es');
    $producto_idioma->titulo_detalle = $request->input('titulo_detalle_es');
    $producto_idioma->descripcion_detalle = $request->input('descripcion_detalle_es');
    $producto_idioma->titulo = $request->input('titulo_es_newproducto');
    $producto_idioma->descripcion = $request->input('descripcion_es_newproducto');
    $producto_idioma->texto_receta = $request->input('descripcion_es_receta');
    $producto_idioma->nombre = $request->input('nombre_es_newproducto');
    $producto_idioma->save();

    return redirect('admin/productos');
  }
  
}
