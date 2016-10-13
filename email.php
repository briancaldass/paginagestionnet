<?php 
	
	$nombre = $POST['nombre'];
	$email = $POST['email'];
	$content = $POST['content'];

	$contenido=$nombre." <br>----".$email."<br>-----<br>".$content;

	mail('briansteve-1992@hotmail.com', 'Nuevo mensaje Contacto Gestion.net', $content);
	
?>

<div>Mensaje Enviado<a href="">Atras</a></div>