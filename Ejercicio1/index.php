<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <?php
    $clase = [
        "alumno1" => [
            "nombre" => "Ana",
            "grupo" => "A1",
            "notas" => [
                "DWECL" => 9,
                "DWES" => 8,
                "Despliegue" => 7
            ]
        ],
        "alumno2" => [
            "nombre" => "Luis",
            "grupo" => "A2",
            "notas" => [
                "DWECL" => 3,
                "DWES" => 5,
                "Despliegue" => 4
            ]
        ],
        "alumno3" => [
            "nombre" => "Marta",
            "grupo" => "A1",
            "notas" => [
                "DWECL" => 10,
                "DWES" => 9,
                "Despliegue" => 4
            ]
        ],
        "alumno4" => [
            "nombre" => "Carlos",
            "grupo" => "A2",
            "notas" => [
                "DWECL" => 7,
                "DWES" => 6,
                "Despliegue" => 5
            ]
        ]
    ];
        ?>
</head>
<body>
    <style>
        body {
            font-family: Arial, sans-serif;
        }

        table, th, td {
            border: 1px solid grey;
            border-collapse: collapse;
            text-align: center;
        }

        th, td {
            padding: 10px;
        }
        th {
            color: white;
            background-color: black;
        }
        .promociona {
            background-color: #c8e6c9;
        }
        .promociona .promocion {
            color: green;
        }
        .no-promociona {
            background-color: #ffcdd2;
        }
        .no-promociona .promocion {
            color: red;
        }

    </style>
    <table>
        <tr>
            <th>Alumno</th>
            <th>Grupo</th>
            <th>DWES</th>
            <th>DWECL</th>
            <th>Despliegue</th>
            <th>Media</th>
            <th>¿Promociona?</th>
        </tr>
        <?php foreach ($clase as $alumno): ?>
            <?php
            $dwes = $alumno["notas"]["DWES"];
            $dwecl = $alumno["notas"]["DWECL"];
            $despliegue = $alumno["notas"]["Despliegue"];
            $media = ($dwes + $dwecl + $despliegue) / 3;
            $tieneSuspensos = ($dwes < 5 || $dwecl < 5 || $despliegue < 5);
            $promociona = ($media >= 5) && !$tieneSuspensos;
            $claseFila = $promociona ? "promociona" : "no-promociona";

            ?>
            <tr class="<?=$claseFila?>">
                <td><?= $alumno["nombre"] ?></td>
                <td><?= $alumno["grupo"] ?></td>
                <td><?= $dwes ?></td>
                <td><?= $dwecl ?></td>
                <td><?= $despliegue ?></td>
                <td><strong><?= number_format($media,2) ?></strong></td>
                <td class="promocion"><strong><?= $promociona ? "sí" : "no" ?></strong></td>
            </tr>
        <?php endforeach; ?>
    </table>
</body>

</html>