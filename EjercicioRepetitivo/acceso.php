<?php
$usuario = "admin";
$nivel = 1;

if ($usuario === "admin" && $nivel > 0) {
    echo "Acceso Total";
} else {
    echo "Acceso Restringido";
}
?>