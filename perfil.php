<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $nombreUsuario="Jesús de Federico";
    $profesion="Estudiante DAW";
    $edad=19;
    $tieneGithub=true;
    ?>
    <h1></h1>
    <h2>$profesion</h2>
    <p>Edad: $edad años</p>
    <?php
    $url="https://github.com/Jesus-dfb/Entorno-servidor.git";
    if($tieneGithub){
        echo "<a href=$url>Ver perfil Github</a>";
    };
    ?>
</body>
</html>