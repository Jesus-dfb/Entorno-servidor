<?php
$clase = [
    [
        "nombre" => "Ana",
        "nota" => 8
    ],
    [
        "nombre" => "Luis",
        "nota" => 4
    ]
];
?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <title>Notas</title>
</head>

<body>
    <?php foreach ($clase as $alumno): ?>
        <?php
        $nombre = $alumno["nombre"];
        $nota = $alumno["nota"];
        ?>
        <?php if ($nota >= 5): ?>
            <p><?php echo $nombre; ?>: Aprobado</p>
        <?php else: ?>
            <p><?php echo $nombre; ?>: Suspenso</p>
        <?php endif; ?>
    <?php endforeach; ?>
</body>

</html>