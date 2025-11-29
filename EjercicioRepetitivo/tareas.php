<?php
$tareas = ["Comprar pan", "Estudiar PHP", "Hacer ejercicio"];

$tareas[] = "Dormir";
?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <title>Lista de tareas</title>
</head>

<body>
    <ul>
        <?php foreach ($tareas as $tarea): ?>
            <li><?php echo $tarea; ?></li>
        <?php endforeach; ?>
    </ul>
</body>

</html>