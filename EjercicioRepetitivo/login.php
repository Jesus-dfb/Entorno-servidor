<?php
$baseDeDatos = [
    "admin" => "1234",
    "user" => "0000"
];

$usuarioInput = "admin";
$passInput = "1234";

if (isset($baseDeDatos[$usuarioInput])) {
    $passwordCorrecta = $baseDeDatos[$usuarioInput];

    if ($passwordCorrecta === $passInput) {
        echo "<h1>Bienvenido!</h1>";
    } else {
        echo "<h3>Contraseña incorrecta</h3>";
    }
} else {
    echo "<h3>Usuario no encontrado</h3>";
}
?>