<?php

if (isset($_POST['action']) && ($_POST['action'] == 'process')) {

    $text=[];
    $text[1]='El código de autenticación no fue validado.';
       
    $text[2]='El campo Nombre es Obligatorio.';
      
    $text[3]='El campo Email es obligatorio y debe contener un correo valido.';
    
    $text[4]='El campo Telefono es obligatorio.';
        
    $text[5]='El campo Comentario es obligatorio.';
        
    $text[6]='Se encontraron los siguientes errores en el formulario:';
    
    
    $error='';

    $recaptcha_url = 'https://www.google.com/recaptcha/api/siteverify'; 
    $recaptcha_secret = '6LdMXF4hAAAAAMWM78rdfhxjVTv0LPxd8nL_1sAP'; 
    $recaptcha_response = $_POST['recaptcha']; 
    $recaptcha = file_get_contents($recaptcha_url . '?secret=' . $recaptcha_secret . '&response=' . $recaptcha_response); 
    $recaptcha = json_decode($recaptcha); 

    if($recaptcha->score < 0.7){

        $error.='<li>'.$text[1].'</li>';

    } 

    /**
     * @version 1.0
     */


    /**************************************************************/
    // el formualrio debe tener campos POST y al menos debe tener
    // uno que se llame nombre y otro que se llame email
    /********************** CONFIGURACION *************************/
$hostSMTP='jorges.ferozo.com';
$usuarioSMTP='presupuestos@rolltec.com.ar';
$claveSMTP='9oO/C9a0uV';
$mailDestino='ventas@rolltec.com.ar';
$asunto='Solicitud Presupuesto - Rolltec';
$paginaSalida='index.php';
    /********************* FIN CONFIGURACION **********************/
    /**************************************************************/




    if(isset($_POST['email'])){
    if (!preg_match('/^[a-z0-9\d_\d-]{3,}/i', $_POST["nombre"])) {
        $error.='<li>'.$text[2].'</li>';
    }	
        
    if(!preg_match('/^([a-zA-Z0-9_.+-])+\@(([a-zA-Z0-9-])+\.)+([a-zA-Z0-9]{2,4})+$/',$_POST["email"]) || $_POST["email"]=='') {
    $error.='<li>'.$text[3].'</li>';
    }

    if ($_POST["telefono"]=='') {
        $error.='<li>'.$text[4].'</li>';
    }


    if ($_POST["comentario"]=='') {
        $error.='<li>'.$text[5].'</li>';
    }





    if($error!=''){

    $error='<span class="error_titulo"><b>'.$text[6].'<b></span><br /><br /><ul class="mensajeError">'.$error.'</ul>';


    }else{


    require("class.phpmailer.php");
    require("class.smtp.php");





    // Valores enviados desde el formulario

    $nombre = $_POST["nombre"];
    $email = $_POST["email"];
    $telefono = $_POST["telefono"];	
    $tipo = $_POST[""];		

    $mensaje='';
    foreach($_POST as $k=>$v){

        if($k!='recaptcha' && $k!='action'){
            $mensaje.='<b>'.$k.'<b>: '.$v.'<br>';
        }

        
    }

    // Datos de la cuenta de correo utilizada para enviar vía SMTP
    $smtpHost = $hostSMTP;  // Dominio alternativo brindado en el email de alta 
    $smtpUsuario = $usuarioSMTP;  // Mi cuenta de correo
    $smtpClave = $claveSMTP;  // Mi contraseña

    // Email donde se enviaran los datos cargados en el formulario de contacto
    $emailDestino = $mailDestino;

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
    $mail->AddReplyTo($email); // Esto es para que al recibir el correo y poner Responder, lo haga a la cuenta del visitante. 
    $mail->Subject = $asunto; // Este es el titulo del email.
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
        header("Location:".$paginaSalida."?estado=ok#contacto");
    } else {
        header("Location:".$paginaSalida."?estado=error#contacto");
    }
    }
    }

}
