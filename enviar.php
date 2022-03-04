<?php
    $destino "zamoraangelo505@gmail.com";
    $nombre = $_POST["nombre"];
    $correo = $_POST["correo"];
    $Comentario = $_POST["Comentario"];
    $Condominio = $_POST["Condominio"];
    $Filiales = $_POST["Filiales"];
    $Configuracion = $_POST["Configuracion"];
    $Tipo = $_POST["Tipo"];
    /* XD */
    $contenido = "nombre" . $nombre .  "\nCorreo" . $correo . "\nComentario" . $Comentario . "\nCondominio" . $Condominio . "\nFiliales" . $Filiales . "\nConfiguracion" . $Configuracion . "\nTipo"
    . $Tipo
    mail($destino,"Contacto cliente, $contenido")
    header("Location:Gracias.html")
 ?>