<?php
namespace App\Funciones;
use DB;
use Auth;
use App\Ubigeos;
use App\Pasajeros;
use App\Reserva;
use App\Agencia;
use App\Vuelos;
use App\Reservas;
use App\ReservaUser;
use App\Precios;
use App\Carpetas;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Input;

class Funciones
{
  public function Prueba(){

  }
  public function saveFile($filename, $directory)
  {
      if (Input::hasFile($filename))
     {

        $fullName = Input::file($filename)->getClientOriginalName();
				$extension = Input::file($filename)->getClientOriginalExtension();

				$fullNameLength = strlen($fullName);

				$extensionLength = strlen($extension);
				$nameLength = $fullNameLength - ($extensionLength + 1);
				$onlyName = substr($fullName, 0, $nameLength);
				$onlyName = Funciones::clean_string($onlyName);
				$maxlength = 234 - ($extensionLength+1);
        $name_of_file = substr($onlyName,0,$maxlength).'-'.date('Ymd'). '.' .$extension;

				$name = $directory.$name_of_file;

        $f = Input::file($filename)->move($directory, $name);

        return $name_of_file;
     }
  }
  static public function SelectsVariaciones($tabla){
    $tbls = DB::table($tabla)->pluck('nombre', 'id_variacion')->toArray();
    return $tbls;
  }
  function clean_string($cadena)
  {

       $string = $cadena;

       $string = str_replace(
           array('á', 'à', 'ä', 'â', 'ª', 'Á', 'À', 'Â', 'Ä'),
           array('a', 'a', 'a', 'a', 'a', 'A', 'A', 'A', 'A'),
           $string
       );

       $string = str_replace(
           array('é', 'è', 'ë', 'ê', 'É', 'È', 'Ê', 'Ë'),
           array('e', 'e', 'e', 'e', 'E', 'E', 'E', 'E'),
           $string
       );

       $string = str_replace(
           array('í', 'ì', 'ï', 'î', 'Í', 'Ì', 'Ï', 'Î'),
           array('i', 'i', 'i', 'i', 'I', 'I', 'I', 'I'),
           $string
       );

       $string = str_replace(
           array('ó', 'ò', 'ö', 'ô', 'Ó', 'Ò', 'Ö', 'Ô'),
           array('o', 'o', 'o', 'o', 'O', 'O', 'O', 'O'),
           $string
       );

       $string = str_replace(
           array('ú', 'ù', 'ü', 'û', 'Ú', 'Ù', 'Û', 'Ü'),
           array('u', 'u', 'u', 'u', 'U', 'U', 'U', 'U'),
           $string
       );

       $string = str_replace(
           array('ñ', 'Ñ', 'ç', 'Ç'),
           array('n', 'N', 'c', 'C'),
           $string
       );

       $string = str_replace(
           array(','),
           array(''),
           $string
       );

       $string = str_replace(
           array( "º", "~",
                "#", "@", "|", "!", '"',
                "·", "$", "%", "&", "/",
                "(", ")", "?", "'", "¡",
                "¿", "[", "^", "<code>", "]",
                "+", "}", "{", "¨", "´",
                ">", "<", ";", ",", ":",
                "."),
           '',
           $string
       );


       $textoLimpio = $string;
       // ***************************

       $textoLimpio =strtolower($textoLimpio);
       return trim($textoLimpio);
   }

}
