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
use App\Puntosventa;
use App\Puntosventaidiomas;

class PuntosventaController extends Controller
{
  public function __construct()
 {
     $this->middleware('auth');
 }
  public function crearmarker(Request $request)
  {

    $markerFormData = $request->all();

    $attributeNames = array(
      'ciudad_newubicacion'=> 'Ciudad',
      'distrito_newubicacion'=> 'Distrito',
      'latitud'=> 'Latitud',
      'longitud'=> 'Longitud',
      'tipo_newubicacion'=> 'Tipo',
      'placeid_newubicacion'=> 'Place id',
      'telefono_newubicacion'=> 'Teléfono',
      'mapa_newubicacion'=> 'Mapa',
    );
    $rules = [
      'ciudad_newubicacion'=> 'required',
      'distrito_newubicacion'=> '',
      'latitud'=> '',
      'longitud'=> '',
      'tipo_newubicacion'=> '',
      'placeid_newubicacion'=> '',
      'telefono_newubicacion'=> 'required',
      'mapa_newubicacion'=> 'required',
    ];


    $validation = Validator::make($request->all(), $rules);
    $validation->setAttributeNames($attributeNames);

    if($validation->fails())
    {
        return redirect()->back()->withErrors($validation)->withInput()->with('status', 'error_banner');
    }
    else {
      $marker_padre= new Puntosventa;
      $marker_padre->ciudad= $markerFormData['ciudad_newubicacion'];
      $marker_padre->distrito= $markerFormData['distrito_newubicacion'];
      $marker_padre->latitud=$markerFormData['latitud'];
      $marker_padre->longitud= $markerFormData['longitud'];
      $marker_padre->tipo_marker= $markerFormData['tipo_newubicacion'];
      $marker_padre->id_lugar= $markerFormData['placeid_newubicacion'];
      $marker_padre->telefono= $markerFormData['telefono_newubicacion'];
      $marker_padre->mapa= $markerFormData['mapa_newubicacion'];
      $marker_padre->save();


      $marker= new Puntosventaidiomas;
      $marker->id_puntosventa=$marker_padre->id;
      $marker->id_idioma=1;
      $marker->nombre=  $markerFormData['nombre_newubicacion'];
      $marker->direccion=  $markerFormData['direccion'];
      $marker->horario=  $markerFormData['horario_newubicacion'];
      $marker->restricciones=  $markerFormData['restricciones_newubicacion'];
      $marker->save();

    }



    return redirect('/puntosventa');
  }

  public function editarmarker(Request $request,$id)
  {
    // dd("editar");
    $markerFormData = $request->all();

    $attributeNames = array(
      'ciudad_newubicacion'=> 'Ciudad',
      'distrito_newubicacion'=> 'Distrito',
      'latitud'=> 'Latitud',
      'longitud'=> 'Longitud',
      'tipo_newubicacion'=> 'Tipo',
      'placeid_newubicacion'=> 'Place id',
      'telefono_newubicacion'=> 'Teléfono',
      'mapa_newubicacion'=> 'Mapa',
    );
    $rules = [
      'ciudad_newubicacion'=> 'required',
      'distrito_newubicacion'=> '',
      'latitud'=> '',
      'longitud'=> '',
      'tipo_newubicacion'=> '',
      'placeid_newubicacion'=> '',
      'telefono_newubicacion'=> 'required',
      'mapa_newubicacion'=> 'required',
    ];

    $validation = Validator::make($request->all(), $rules);
    $validation->setAttributeNames($attributeNames);

    if($validation->fails())
    {
        return redirect()->back()->withErrors($validation)->withInput()->with('status', 'error_banner');
    }
    else {
      DB::table('puntos_venta')->where('id', $id)->update(array(
      'ciudad' =>  $markerFormData['ciudad_newubicacion']
      ,'distrito' => $markerFormData['distrito_newubicacion']
      ,'latitud' => $markerFormData['latitud']
      , 'longitud' => $markerFormData['longitud']
      ,'tipo_marker' => $markerFormData['tipo_newubicacion']
      ,'id_lugar' => $markerFormData['placeid_newubicacion']
      , 'telefono' => $markerFormData['telefono_newubicacion']
      , 'mapa' => $markerFormData['mapa_newubicacion']
      ));

      DB::table('puntos_venta_idiomas')->where('id_puntosventa', $id)->update(array(
      'nombre' =>  $markerFormData['nombre_newubicacion']
      ,'direccion' => $markerFormData['direccion']
      ,'horario' => $markerFormData['horario_newubicacion']
      , 'restricciones' => $markerFormData['restricciones_newubicacion']
      ));
    }

    return redirect('/puntosventa');
  }

    /**
     * Guardar datos de contacto
     *
     * @return \Illuminate\Http\Response
     */


}
