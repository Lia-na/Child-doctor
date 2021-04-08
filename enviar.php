<?php 
	$nombre = $_REQUEST["nombre"];
	$email = $_REQUEST["email"];
	$comentario = $_REQUEST["message"];
	
	$contenido = "<h3>Nuevo mensaje</h3>";
	$contenido .= "<h4>".$nombre."</h4>";
	$contenido .= "<strong>E-Mail: </strong>".$email."<br/>";
	$contenido .= "<strong>Mensaje: </strong><br/>".$comentario;
	
	$asunto = "Se ha rellenado un formulario.";
	$headers = "MIME-Version:1.0\r\n";
	$headers .= "Content-type: text/html;charset=iso-8859-1\r\n";
	$headers .= "From: direccion@servidor.com\r\n";
	
?>
<?php $bool = mail("alvado.321.contacto@gmail.com",$asunto,$contenido,$headers);
	if($bool==true){
		echo "<h2>Gracias, $nombre.</h2>\n<h3>Su mensaje ha sido enviado satisfactoriamente.</h3>";
	}else{
		echo "<span class='rojo'>Solicitud no enviada</span>";
	}
?>