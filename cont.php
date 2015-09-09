 <?php

 if(!empty($_POST['nombre']) AND !empty($_POST['email'])){

$to ="ordaz.11r@gmail.com";
$headers = "Content-Type: text/html; charset=iso-8859-1\n"; 
$headers .= "From:".$_POST['nombre']."\r\n";			
$tema="Mensaje desde oarlic.com";
$mensaje="
<table border='0' cellspacing='2' cellpadding='2'>
  <tr>
    <td width='20%' align='center' bgcolor='#FFFFCC'><strong>Nombre:</strong></td>
    <td width='80%' align='left'>$_POST[nombre]</td>
  </tr>
  <tr>
    <td align='center' bgcolor='#FFFFCC'><strong>E-mail:</strong></td>
    <td align='left'>$_POST[email]</td>
  </tr>

  <tr>
    <td align='center' bgcolor='#FFFFCC'><strong>Comentario:</strong></td>
    <td align='left'>$_POST[mensaje]</td>
  </tr>
</table>
";
@mail($to,$tema,$mensaje,$headers); 
echo "<META HTTP-EQUIV=\"Refresh\" CONTENT=\"0;URL=http://oarlic.com/gracias.html\">"; 
} else {
	echo "No se puede enviar el formulario, verifica los campos";
}
?>