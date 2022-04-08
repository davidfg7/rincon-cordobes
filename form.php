<?php
    // Para capturar la info que se ingresa en los inputs del form tengo que crear variables.

    $nombre = $_POST['nombre'];
    $mail = $_POST['email'];
    $mensaje = $_POST['textarea'];

    // A quien le mando la info

    $para = 'garcia.davidff@gmail.com';
    $asunto = 'Este mail fue enviado desde la web'

    // Función que envía la info del form:

    mail($para, $asunto, utf8_decode($nombre, $mail, $mensaje));

    // Función que redirecciona al usuario una vez que presiona enviar:

    header('Location: paginas/exito.html');








?>