<?php

// INI CORREO AL QUE SE ENVIAN LOS MENSAJES
$mail_destinatario = 'ordaz.11r@gmail.com';
// FIN CORREO AL QUE SE ENVIAN LOS MENSAJES

if (isset ($_POST['enviar'])) {
$headers .= "From: ".$_POST['email']. "";
if ( mail ($mail_destinatario, $_POST['asunto'], "Mensaje enviado desde formulario".$_POST['']."\n \n". "E-Mail: ".$_POST['email']."\n". "Nombre: ".$_POST['nombre']."\n". "Asunto: ".stripcslashes ($_POST['asunto'])."\n". "Mensaje: ".stripcslashes ($_POST['mensaje']), $headers )) echo'

    Mensaje enviado!
'; 

else echo '
    Error! Por favor, inténtelo de nuevo mas tarde.
'; 
}
?>