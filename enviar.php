<?php
    $destino "Cliente@macondocr.com";
    $nombre = $_POST["nombre"];
    $correo = $_POST["correo"];
    $Comentario = $_POST["Comentario"];
    $Condominio = $_POST["Condominio"];
    $Filiales = $_POST["Filiales"];
    $Configuracion = $_POST["Configuracion"];
    $Tipo = $_POST["Tipo"];
    /* XD */
    $contenido = "nombre" . $nombre .  "\nCorreo" . $correo . "\nComentario" . $Condominio . "\nFiliales" $Filiales . "\nConfiguracion" $Configuracion
    mail($destino,"Contacto cliente, $contenido")
    header("Location:Gracias.html")
 ?>