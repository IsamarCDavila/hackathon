<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Input;
use Illuminate\Html\HtmlServiceProvider;
use DB;
use Auth;
use Funciones;
use App\Puntosventa;
use App\Puntosventaidiomas;

class AdminController extends Controller
{
    public function __construct()
   {
       $this->middleware('auth');
   }
    public function index()
    {
      return view('admin.sliders.slider');
    }
    // public function slider()
    // {
    //   return view('admin.sliders.slider');
    // }
    // public function banner()
    // {
    //   return view('admin.banners.banner');
    // }
    public function recetas()
    {
      return view('admin.recetas.recetas');
    }

    public function newreceta(Request $request)
    {
      return view('admin.recetas.newreceta')
      ->with('request', $request);
    }
    public function producto()
    {
      return view('admin.productos.producto');
    }
    public function newproducto()
    {
      return view('admin.productos.newproducto');
    }
    public function editproducto()
    {
      return view('admin.productos.editproducto');
    }
    public function noticias()
    {
      return view('admin.noticias.noticias');
    }
    public function newnoticia()
    {
      return view('admin.noticias.newnoticia');
    }
    public function editnoticia()
    {
      return view('admin.noticias.editnoticia');
    }
    public function contacto()
    {
      return view('admin.contacto.contacto');
    }
    public function newcontactoubicacion()
    {
      return view('admin.contacto.ubicacion.newubicacion');
    }
    public function editcontactoubicacion()
    {
      return view('admin.contacto.ubicacion.editubicacion');
    }
    
    public function puntosventa()
    {
      $marker = DB::table('puntos_venta_idiomas')
      ->join('puntos_venta','puntos_venta.id',"=","puntos_venta_idiomas.id_puntosventa")
      ->get();
      return view('admin.puntos.puntos')
      ->with('marker',$marker);
    }
    public function newpuntosubicacion()
    {
      return view('admin.puntos.newubicacion');
    }
    public function editpuntosubicacion(Request $request,$id)
    {
      $idmarker=$id;
      $marker = DB::table('puntos_venta_idiomas')
      ->join('puntos_venta','puntos_venta.id',"=","puntos_venta_idiomas.id_puntosventa")
      ->where("id_puntosventa","=",$id)
      ->get();
      return view('admin.puntos.editubicacion')
      ->with('marker',$marker)
      ->with('idmarker',$idmarker);
    }

    /**
     * Guardar datos de contacto
     *
     * @return \Illuminate\Http\Response
     */


}
