<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        if(isset($_POST["nombre"])) {
            $nombre = $_POST["nombre"];
            echo "Hola, " . $nombre . "!";
        } else {
            echo "Por favor, envía tu nombre a través del formulario.";
        }
    ?>
</body>
</html>