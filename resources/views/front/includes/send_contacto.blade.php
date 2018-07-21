<?php
 $nombreP = $_POST['nombreP'];
 $email = $_POST['email'];
 $empresa = $_POST['empresa'];
 $ruc = $_POST['ruc'];
 $telefono = $_POST['telefono'];
 $mensaje = $_POST['mensaje'];
 /*Preparar Mail*/
 $to = "guribe@san-fernando.com.pe";
 $to_a = "cpalominoq@san-fernando.com.pe";
 $to_b = "lhidalgow@san-fernando.com.pe";
 $subject= "Contacto";
 $headers =  'MIME-Version: 1.0' . "\r\n";
 $headers .= 'From:'.$nombreP.'<'.$email.'>'. "\r\n";
 $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
 $message = 'Nombre: '.$nombreP."<br>\n";
 $message .= 'Email: '.$email."<br>\n";
 $message .= 'Empresa: '.$empresa."<br>\n";
 $message .= 'Teléfono: '.$telefono."<br>\n";
 $message .= 'Mensaje: '.$mensaje."<br>\n";
 $url= $_SERVER["HTTP_HOST"];

 $bool= mail("$to,$to_a,$to_b",$subject, $message, $headers);
 if($bool==1)
 {
   $flag='true';
 }
 echo '<script> window.location.href="http://www.san-fernando.com.pe/puntosdecanje?status='.$flag.'"</script> ';
?>
