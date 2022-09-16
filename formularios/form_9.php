<?php
/**
 * @version 1.0
 */


/**************************************************************/
// el formualrio debe tener campos POST y al menos debe tener
// uno que se llame nombre y otro que se llame email
/********************** CONFIGURACION *************************/

require("credenciales.php");

/********************* FIN CONFIGURACION **********************/
/**************************************************************/


$error='';

if(isset($_POST['email'])){/*
if (!preg_match('/^[a-z0-9\d_\d-]{3,}/i', $_POST["nombre"])) {
    $error.='<li>El campo Nombre es Obligatorio.</li>';
}	
if (!preg_match('/^[a-z0-9\d_\d-]{3,}/i', $_POST["empresa"])) {
    $error.='<li>El campo Nombre de mi Asesor es Obligatorio.</li>';
}	
	
if(!preg_match('/^([a-zA-Z0-9_.+-])+\@(([a-zA-Z0-9-])+\.)+([a-zA-Z0-9]{2,4})+$/',$_POST["email"]) || $_POST["email"]=='') {
  $error.='<li>El campo Email es obligatorio y debe contener un correo valido.</li>';
}

if ($_POST["telefono"]=='') {
    $error.='<li>El campo Telefono es obligatorio.</li>';
}


if ($_POST["comentario"]=='') {
    $error.='<li>El campo Comentario es obligatorio.</li>';
}
*/



if($error!=''){

$error='<span class="error_titulo">Se encontraron los siguientes errores en el formulario:</span><br /><br /><ul class="mensajeError">'.$error.'</ul>';


}else{


require("class.phpmailer.php");
require("class.smtp.php");

	
$mensaje="Solicitud de Presupuesto: <br>";
$mensaje.="Serie Semi Liviana / Pesada - Rodillos Tractor P. Doble<br>";
		
$mensaje.="-------------"."<br>";
	
$mensaje.="Registrante: ".$_POST["nombre"]."<br>";
$mensaje.="Empresa: ".$_POST["empresa"]."<br>";
$mensaje.="Telefono: ".$_POST["telefono"]."<br>";
$mensaje.="Mail: ".$_POST["email"]."<br>";	
$mensaje.="-------------"."<br>";

	$mensaje.="Cantidad: ".$_POST["cantidad"]."<br>";
	$mensaje.="Material: ".$_POST["material"]."<br>";
	$mensaje.="D: ".$_POST["d_cano"]."<br>";
	$mensaje.="Cantidad Dientes Z y Paso: ".$_POST["dientes"]."<br>";
	$mensaje.="Largo Rodadura:: ".$_POST["lr"]."<br>";
	$mensaje.="Largo Util: ".$_POST["lu"]."<br>";
	
$mensaje.="Observaciones: ".$_POST["observaciones"]."<br>";		

}

// Datos de la cuenta de correo utilizada para enviar vía SMTP
$smtpHost = $hostSMTP;  // Dominio alternativo brindado en el email de alta 
$smtpUsuario = $usuarioSMTP;  // Mi cuenta de correo
$smtpClave = $claveSMTP;  // Mi contraseña

// Email donde se enviaran los datos cargados en el formulario de contacto
$emailDestino = $mailDestino;


//EMAIL MASTER
$mail = new PHPMailer();
$mail->IsSMTP();
$mail->SMTPAuth = true;
$mail->Port = 587; 
$mail->IsHTML(true); 
$mail->CharSet = "utf-8";

$mail->Host = $smtpHost; 
$mail->Username = $smtpUsuario; 
$mail->Password = $smtpClave;

$mail->From = $smtpUsuario; // Email desde donde envío el correo.
$mail->FromName = $nombre;
$mail->AddAddress($emailDestino); // Esta es la dirección a donde enviamos los datos del formulario
$mail->AddAddress($_POST["email"], $nombre);
// $mail->addCC($email);
// $mail->addCC = $_POST["email"];
$mail->AddReplyTo($email); // Esto es para que al recibir el correo y poner Responder, lo haga a la cuenta del visitante. 
$mail->Subject = "Solicitud de Presupuesto RollTec"; // Este es el titulo del email.
$mensajeHtml = $mensaje;
$mail->Body = "{$mensajeHtml}"; // Texto del email en formato HTML
$mail->AltBody = "{$mensaje}"; // Texto sin formato HTML

// FIN - VALORES A MODIFICAR //

$mail->SMTPOptions = array(
    'ssl' => array(
        'verify_peer' => false,
        'verify_peer_name' => false,
        'allow_self_signed' => true
    )
);

$estadoEnvio = $mail->Send(); 


if($estadoEnvio){
    header("Location:".$paginaSalida."?estado=ok");
} else {
    header("Location:".$paginaSalida."?estado=error");
}
}
