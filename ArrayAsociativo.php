<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $usuario=[
            "nombre"=>"Juan", 
            "apellidos"=>"Pérez Gómez",
            "edad"=>28,
            "email"=>"juan@email.com"
        ];
        echo $usuario["email"];
        $numeros =[
            "num1"=>10,
            "num2"=>20,
        ];
        echo $numeros["nu m1"] + $numeros["num2"];
    ?>
</body>
</html>