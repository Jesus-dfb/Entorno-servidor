<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $modulos = array("Interfaz web","Entornos servidor","Despliegue web");
    // Acceder a los elementos del array
    echo $modulos[0];
    echo $modulos[2];
    // Modificar el valor del segundo elemento
    $modulos[1] = "Inglés";
    // Agregar un nuevo elemento al final del array
    $modulos[] = "Entorno cliente";
    //Mostrar el contenido del array completo
    print_r($modulos);
    ?>
</body>
</html>

