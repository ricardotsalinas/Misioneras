<?php
$nombre = $_POST['nombre'];
$email = $_POST['email'];
$comentario = $_POST['comentario'];
$para = 'ricardotsalinas@gmail.com';
$titulo = 'Asunto del Mensaje';
$header = 'From: ' . $email;
$msjCorreo = "Nombre: $nombre\n E-Mail: $email\n Mensaje:\n $comentario";


    if (mail($para, $titulo, $msjCorreo, $header)) {
        echo "<script language='javascript'>
alert('Mensaje enviado, muchas gracias.');
window.location.href = 'http://www.misionerasdelpilar.org';
</script>";
    } else {
        echo 'Falló el envio';
    }

?>