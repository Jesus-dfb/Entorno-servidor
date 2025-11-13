<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Examen Servidor-Jesús de Federico</title>
</head>

<body>
    <?php
    $nombreAlumno = "Jesús de Federico";
    $modulo = "Desarrollo Web en Entorno Servidor";
    $notaMedia = 7.5;
    $esMatriculado = true;
    //Imprimir variables creadas
    echo "<h1>$nombreAlumno</h1>\n";
    echo "<h2>$modulo</h2>\n";
    echo "Mi nota media actual es: $notaMedia <br>\n";
    //Separación con . porque se usan comillas simples
    echo 'Mi nota media actual es $notaMedia</br>';

    //Comprobar sobresaliente
    if ($notaMedia >= 9) {
        echo "Sobresaliente";
    }
    //Comprobar Notable
    elseif ($notaMedia >= 7 && $notaMedia < 9) {
        echo "Notable";
    }
    //Comprobar aprobado
    elseif ($notaMedia >= 5 && $notaMedia < 7) {
        echo "Aprobado";
    }
    //Comprobar suspenso
    elseif ($notaMedia < 5) {
        echo "Suspenso";
    }
    echo "<br>";

    //Comprobar matriculado
    if ($esMatriculado) {
        echo "Estado: Alumno matriculado";
    }
    //Damos borde y creamos la primera fila con las 2 cabeceras 
    echo "<table border='1'>";
    echo "<tr><th>Columna 1</th><th>Columna 2</th></tr>";
    //bucle para crear las 5 filas
    $i = 1;
    while ($i <= 5) {
        echo "<tr><td>Fila número</td><td>$i</td></tr>";
        $i++;
    }
    echo "</table>";
    ?>


</body>

</html>