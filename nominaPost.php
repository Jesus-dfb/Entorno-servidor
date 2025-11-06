<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    $sueldo = $_POST['sueldo'];
    $extra = $_POST['extra'];

    $pagoExtra = $extra * 20;
    $retencion = $sueldo * 0.10;
    $sueldoTotal = $sueldo + $pagoExtra - $retencion;

    echo "El sueldo total es: " . $sueldoTotal . " euros.";
    ?>
</body>

</html>