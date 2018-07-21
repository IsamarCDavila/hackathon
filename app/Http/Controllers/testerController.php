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
use Mail;

class testerController extends Controller
{
    public function __construct()
    {
       //$this->middleware('auth');
    }
    public function index()
    {
       //$this->middleware('auth');
    }
    public function envia_contacto(Request $request)
    {
      $data = [
              'email_contacto' => $request->input('correo'),
              'email_destino' => 'isamar.dvgz@gmail.com',
              'name' => $request->input('nombre'),
              'mensaje' => $request->input('mensaje'),
              'dni' => $request->input('dni'),
              'telefono' => $request->input('telefono'),
              'distrito' => $request->input('distrito'),
            ];
      Mail::send('mail.demo', $data, function ($message) use ($data) {
          $message->to($data['email_contacto'], 'San Fernando')->subject('San Fernando '.\Carbon\Carbon::now());
      });

      Mail::send('mail.demo_destino', $data, function ($message) use ($data) {
          $message->to($data['email_destino'], $data['name'])->subject('Datos Formulario Contacto '.\Carbon\Carbon::now())->cc(['idavila@apros.pe']);
      });
    }

    public function envia_distribuidor(Request $request)
    {
      $data = [
              'email_contacto' => $request->input('correo'),
              'email_destino' => 'isamar.dvgz@gmail.com',
              'name' => $request->input('nombre'),
              'mensaje' => $request->input('mensaje'),
              'dni' => $request->input('dni'),
              'telefono' => $request->input('telefono'),
              'distrito' => $request->input('distrito'),
            ];
      Mail::send('mail.demo', $data, function ($message) use ($data) {
          $message->to($data['email_contacto'], 'San Fernando')->subject('San Fernando '.\Carbon\Carbon::now());
      });

      Mail::send('mail.demo_destino', $data, function ($message) use ($data) {
          $message->to($data['email_destino'], $data['name'])->subject('Datos Formulario ¿Quieres ser distribuidor? '.\Carbon\Carbon::now())->cc(['idavila@apros.pe']);
      });
    }
    public function envia_distribuidorR(Request $request)
    {
      $data = [
              'email_contacto' => $request->input('correo'),
              'email_destino' => 'isamar.dvgz@gmail.com',
              'name' => $request->input('nombre'),
              'mensaje' => $request->input('mensaje'),
              'dni' => $request->input('dni'),
              'telefono' => $request->input('telefono'),
              'distrito' => $request->input('distrito'),
            ];
      Mail::send('mail.demo', $data, function ($message) use ($data) {
          $message->to($data['email_contacto'], 'San Fernando')->subject('San Fernando '.\Carbon\Carbon::now());
      });

      Mail::send('mail.demo_destino', $data, function ($message) use ($data) {
          $message->to($data['email_destino'], $data['name'])->subject('Datos Formulario ¿Quieres ser distribuidor? '.\Carbon\Carbon::now())->cc(['isamar.dvgz@gmail.com']);
      });
    }
    public function envia_libro(Request $request)
    {
      $path= $request->input('ruta');
      $data = [
              'email_contacto' => $request->input('correo'),
              'email_destino' => 'isamar.dvgz@gmail.com',
              'name' => $request->input('nombre'),
              'tipo' => $request->input('tipo'),
              'documento' =>$request->input('documento'),
              'apellidop' =>$request->input('apellidop'),
              'apellidom' =>$request->input('apellidom'),
              'recibir' =>$request->input('recibir'),
              'departamento' =>$request->input('departamento'),
              'provincia' =>$request->input('provincia'),
              'distrito' =>$request->input('distrito'),
              'direccion' =>$request->input('direccion'),
              'telefono' =>$request->input('telefono'),
              'correo' =>$request->input('correo'),
              'edad' =>$request->input('edad'),
              'tipoA' =>$request->input('tipoA'),
              'documentoA' =>$request->input('documentoA'),
              'nombreA' =>$request->input('nombreA'),
              'apellidoPA' =>$request->input('apellidoPA'),
              'apellidoMA' =>$request->input('apellidoMA'),
              'producto' =>$request->input('producto'),
              'fecha' =>$request->input('fecha'),
              'lugar' =>$request->input('lugar'),
              'monto' =>$request->input('monto'),
              'adquirio' =>$request->input('adquirio'),
              'incidente' =>$request->input('incidente'),
              'descripcion' =>$request->input('descripcion'),
              'solicitud' =>$request->input('solicitud'),

            ];
      Mail::send('mail.demo', $data, function ($message) use ($data) {
          $message->to($data['email_contacto'], 'San Fernando')->subject('San Fernando '.\Carbon\Carbon::now());

      });
      if($path){
        Mail::send('mail.demo_libro', $data, function ($message) use ($data,$path) {
            $message->to($data['email_destino'], $data['name'])->subject('Libro de Reclamaciones '.\Carbon\Carbon::now())->cc(['isamar.dvgz@gmail.com']);
            $message->attach($path);
        });
      }
      else{
        Mail::send('mail.demo_libro', $data, function ($message) use ($data) {
            $message->to($data['email_destino'], $data['name'])->subject('Libro de Reclamaciones '.\Carbon\Carbon::now())->cc(['isamar.dvgz@gmail.com']);
        });
      }
    }
}
