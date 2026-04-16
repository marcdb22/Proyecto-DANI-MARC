<?php
// Ejemplo básico
$usuario = $_POST['usuario'];
$contrasena = $_POST['contraseña'];


// Aquí deberías validar con base de datos
if ($usuario == "admin" && $contrasena == "1234") {
    // Redirigir a index.html
    header("Location: ../index/index.html");
    exit();
} else {
    echo "Usuario o contraseña incorrectos";
}
?>