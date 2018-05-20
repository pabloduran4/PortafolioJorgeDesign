<?php
  
  $destino = "pablo.durant@utadeo.edu.co";
  $nombre = $_POST['nombre'];
  $asunto = $_POST['asunto'];
  $email = $_POST['email'];
  $mensaje = $_POST['mensaje'];
  $contenido = "Nombre: " .$nombre. "\nCorreo: " .$email. "\nMensaje: " .$mensaje;
  
  mail($destino,$asunto,$contenido);
  header("Location:contacto-enviado.html");

?>