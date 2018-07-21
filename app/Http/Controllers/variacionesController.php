<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Producto;
use App\Variacion;
use App\VariacionIdiomas;
use App\VariacionNutrientes;
use App\VariacionImagenes;
use App\Idioma;
use App\Receta;
use App\Nutrientes;
use Funciones;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Response;
use DB;

class variacionesController extends Controller
{
  public function __construct()
 {
     $this->middleware('auth');
 }
  public function index($idproducto)
  {
    $producto = Producto::join('productos_idiomas', 'productos_idiomas.id_producto', '=', 'productos.id')
    ->where('productos_idiomas.id_idioma', '=', 1)
    ->where('productos.id', '=', $idproducto)
    ->select('productos.id', 'productos_idiomas.nombre', 'productos.icono_path')
    ->first();

    $variaciones = Variacion::join('variaciones_idiomas', 'variaciones_idiomas.id_variacion', '=', 'variaciones.id')
    ->select('variaciones.id', 'variaciones_idiomas.nombre', 'variaciones.imagen_principal_path')
    ->where('variaciones_idiomas.id_idioma', '=', 1)
    ->where('variaciones.id_producto', '=', $idproducto)
    ->get();

    return view('admin.variaciones.variaciones')
    ->with('producto', $producto)
    ->with('variaciones', $variaciones);
  }
  public function create($idproducto)
  {
    $producto = Producto::join('productos_idiomas', 'productos_idiomas.id_producto', '=', 'productos.id')
    ->where('productos_idiomas.id_idioma', '=', 1)
    ->where('productos.id', '=', $idproducto)
    ->select('productos.id', 'productos_idiomas.nombre', 'productos.icono_path')
    ->first();

      $sellos = DB::table('sellos')->pluck('descripcion', 'id')->toArray();

    return view('admin.variaciones.newvariacion')
      ->with('producto', $producto)
      ->with('sellos', $sellos);

  }
  public function store($idproducto, Request $request)
  {

    $variacion = new Variacion();

    if (Input::hasFile('imagen_principal'))
    {
      $path = $request->file('imagen_principal')->store('upload/productos');
      Storage::disk('uploads')->put('productos', $request->file('imagen_principal'));
      $variacion->imagen_principal_path=$path;
      $variacion->imagen_principal= $request->file('imagen_principal')->getClientOriginalName();
    }

    $variacion->id_producto = $idproducto;
    $variacion->id_sello = $request->input('sello');
    $variacion->slug = str_replace(' ', '-', Funciones::clean_string($request->input('nombre_es')));
    $variacion->save();

    $variacion_idioma = new VariacionIdiomas();
    $variacion_idioma->id_variacion = $variacion->id;
    $variacion_idioma->id_idioma = 1;
    $variacion_idioma->nombre = $request->input('nombre_es');
    $variacion_idioma->descripcion = $request->input('descripcion_es');
    $variacion_idioma->ingredientes = $request->input('ingredientes_es');
    $variacion_idioma->presentacion = $request->input('presentacion_es');
    $variacion_idioma->save();

    return redirect('admin/variaciones/'.$idproducto);
  }
  public function edit($idproducto, $id)
  {
      $producto = Producto::join('productos_idiomas', 'productos_idiomas.id_producto', '=', 'productos.id')
      ->where('productos_idiomas.id_idioma', '=', 1)
      ->where('productos.id', '=', $idproducto)
      ->select('productos.id', 'productos_idiomas.nombre', 'productos.icono_path')
      ->first();

      $variacion = Variacion::join('variaciones_idiomas', 'variaciones_idiomas.id_variacion', '=', 'variaciones.id')
        ->select('variaciones.id'
        , 'variaciones.id_sello'
        , 'variaciones.imagen_principal_path'
        ,'variaciones_idiomas.nombre'
        ,'variaciones_idiomas.descripcion'
        ,'variaciones_idiomas.ingredientes'
        ,'variaciones_idiomas.presentacion'
        )
        ->where('variaciones.id', '=', $id)
        ->first();

      $nutrientes = Nutrientes::get();

      $variacion_nutrientes = VariacionNutrientes::join('nutrientes', 'nutrientes.id', '=', 'variaciones_nutrientes.id_nutriente')
        ->select('nutrientes.nombre_es as nutriente', 'nutrientes.unidad', 'variaciones_nutrientes.cantidad', 'variaciones_nutrientes.id', 'variaciones_nutrientes.id_nutriente')
        ->where('variaciones_nutrientes.id_variacion', '=', $id)
        ->get();

      $imagenes = VariacionImagenes::where('id_variacion', '=', $id)->get();

      $sellos = DB::table('sellos')->pluck('descripcion', 'id')->toArray();

      return view('admin.variaciones.editvariacion')
        ->with('variacion', $variacion)
        ->with('sellos', $sellos)
        ->with('nutrientes', $nutrientes)
        ->with('producto', $producto)
        ->with('variacion_nutrientes', $variacion_nutrientes)
        ->with('imagenes', $imagenes);
  }
  public function update($idproducto, $id, Request $request)
  {
    $variacion = Variacion::find($id);

    if (Input::hasFile('imagen_principal'))
    {
      $imagen_anterior = $variacion->imagen_principal_path;

      $path = $request->file('imagen_principal')->store('upload/productos');
      Storage::disk('uploads')->put('productos', $request->file('imagen_principal'));
      $variacion->imagen_principal_path=$path;
      $variacion->imagen_principal= $request->file('imagen_principal')->getClientOriginalName();

      File::delete($imagen_anterior);
    }

    $variacion->id_sello = $request->input('sello');
    $variacion->slug = str_replace(' ', '-', Funciones::clean_string($request->input('nombre_es')));
    $variacion->save();

    $variacion_idioma = VariacionIdiomas::where('id_idioma', '=',1)->where('id_variacion', '=', $id)->select('id')->first();
    $variacion_idioma->nombre = $request->input('nombre_es');
    $variacion_idioma->descripcion = $request->input('descripcion_es');
    $variacion_idioma->ingredientes = $request->input('ingredientes_es');
    $variacion_idioma->presentacion = $request->input('presentacion_es');
    $variacion_idioma->save();

    return redirect('admin/variaciones/'.$idproducto);
  }
  public function saveimg(Request $request)
  {
    $id = $request->input('variacion');

    if (Input::hasFile('file'))
    {
      $img = new VariacionImagenes();
      $img->id_variacion = $id;

      $path = $request->file('file')->store('upload/productos');
      Storage::disk('uploads')->put('productos', $request->file('file'));
      $img->imagen_path=$path;
      $img->imagen= $request->file('file')->getClientOriginalName();

      $img->save();

      $obj["id"] = $img->id;
      $obj["path"] = url($img->imagen_path);

      return $obj;
    }
    else {
      return 0;
    }
  }
  public function editimg(Request $request)
  {
    $id = $request->input('id_img');

    if (Input::hasFile('file'))
    {
      $img = VariacionImagenes::find($id);

      $imagen_anterior = $img->imagen_path;

      $path = $request->file('file')->store('upload/productos');
      Storage::disk('uploads')->put('productos', $request->file('file'));
      $img->imagen_path=$path;
      $img->imagen= $request->file('file')->getClientOriginalName();

      $img->save();

      File::delete($imagen_anterior);

      $obj["id"] = $img->id;
      $obj["path"] = url($img->imagen_path);

      return $obj;
    }
    else {
      return 0;
    }
  }
  public function deleteimg(Request $request)
  {
      $id = $request->input('id');

      $img = VariacionImagenes::find($id);

      $imagen_anterior = $img->imagen_path;
      $img->delete();

      File::delete($imagen_anterior);

      return 1;
  }
  public function newnutriente(Request $request)
  {
    $id_variacion = $request->input('variacion');
    $id_nutriente = $request->input('nutriente');

    $nutriente_existente = VariacionNutrientes::where('id_variacion', '=', $id_variacion)
      ->where('id_nutriente', '=', $id_nutriente)
      ->first();

    if(!$nutriente_existente)
    {
      $variacion_nutriente = new VariacionNutrientes();
      $variacion_nutriente->id_variacion = $id_variacion;
      $variacion_nutriente->id_nutriente = $id_nutriente;
      $variacion_nutriente->cantidad = $request->input('cantidad');
      $variacion_nutriente->save();

      return Response::json(array("obj"=>$variacion_nutriente));
    }
    else{
      return 'existe';
    }


  }
  public function deletenutriente(Request $request)
  {
    $nutriente = VariacionNutrientes::where('id', '=', $request->input('id'))->delete();
    return 1;
  }
  public function editnutriente(Request $request)
  {
    $id = $request->input('id');

    $id_variacion = $request->input('variacion');
    $id_nutriente = $request->input('nutriente');

    $nutriente_existente = VariacionNutrientes::where('id_variacion', '=', $id_variacion)
      ->where('id_nutriente', '=', $id_nutriente)
      ->where('id', '<>', $id)
      ->first();

    if(!$nutriente_existente)
    {
      $variacion_nutriente = VariacionNutrientes::find($id);
      $variacion_nutriente->id_nutriente = $request->input('nutriente');
      $variacion_nutriente->cantidad = $request->input('cantidad');
      $variacion_nutriente->save();

      return Response::json(array("obj"=>$variacion_nutriente));
    }
    else{
      return 'existe';
    }
  }


}
