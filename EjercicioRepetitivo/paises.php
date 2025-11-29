<?php
$paises = [
    "España" => "Madrid",
    "Francia" => "París",
    "Italia" => "Roma"
];
?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <title>Capitales</title>
</head>

<body>
    <?php foreach ($paises as $pais => $capital): ?>
        <p>La capital de <?php echo $pais; ?> es <?php echo $capital; ?>.</p>
    <?php endforeach; ?>
</body>

</html>