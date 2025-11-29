<?php
// =================================================================
// B A C K E N D   (Espacio para el alumno)
// =================================================================

// 1. Estructura de Datos: Array Multidimensional Asociativo [cite: 9]
// TODO: Inicializa el array con los 4 productos que se ven en la foto (Auriculares, Monitor, Cable, Ratón)
// Asegúrate de usar las claves: 'id', 'categoria', 'nombre', 'precio', 'stock'.
$inventario = [
    "producto1" => [
        "id" => 1,
        "categoria" => "Audio",
        "nombre" => "Auriculares Inalámbricos XYZ",
        "precio" => 59.99,
        "stock" => 12
    ],
    "producto2" => [
        "id" => 2,
        "categoria" => "Video",
        "nombre" => "Monitor 24'' Full HD ABC",
        "precio" => 149.99,
        "stock" => 4
    ],
    "producto3" => [
        "id" => 3,
        "categoria" => "Cables",
        "nombre" => "Cable HDMI 2.0 DEF",
        "precio" => 12.49,
        "stock" => 25
    ],
    "producto4" => [
        "id" => 4,
        "categoria" => "Periféricos",
        "nombre" => "Ratón Óptico USB GHI",
        "precio" => 19.99,
        "stock" => 3
    ]
];

// Variable para controlar qué lista mostrar (si la completa o la filtrada)
$productos_a_mostrar = $inventario;
$mensaje = "";

// 2. Funciones Personalizadas (Modularidad) [cite: 10]

/**
 * Función para Insertar un nuevo producto.
 * REQUISITO: Paso por referencia para modificar el array original 
 */
function agregarProducto(&$lista, $nombre, $categoria, $precio, $cantidad)
{
    // TODO:
    // 1. Validar que el precio no sea negativo y que el nombre no esté vacío[cite: 7].
    if (trim($nombre) === '' || $precio < 0 || $cantidad < 0) {
        return false;
    }
    // 2. Crear el nuevo array asociativo del producto.
    $nuevoId = count($lista) + 1;
    $clave = 'producto' . $nuevoId;
    // 3. Añadirlo al array original ($lista).
    $nuevoProducto = [
        'id' => $nuevoId,
        'categoria' => $categoria,
        'nombre' => $nombre,
        'precio' => $precio,
        'stock' => $cantidad,
    ];
    $lista[$clave] = $nuevoProducto;
    return true;
}

/**
 * Función para Buscar productos.
 * REQUISITO: Filtrar por nombre sin distinguir mayúsculas/minúsculas [cite: 5]
 */
function buscarProducto($lista, $termino)
{
    // TODO:
    $termino = trim($termino);

    // Si no hay término, devolvemos la lista completa
    if ($termino === '') {
        return $lista;
    }

    $resultado = [];

    // 2. Recorrer el array y filtrar por nombre ignorando mayúsculas/minúsculas
    foreach ($lista as $clave => $producto) {
        // stripos() realiza la búsqueda sin distinguir mayúsculas/minúsculas
        if (isset($producto['nombre']) && stripos($producto['nombre'], $termino) !== false) {
            $resultado[$clave] = $producto;
        }
    }

    // 3. Retornar un nuevo array solo con las coincidencias.
    return $resultado;
}

// 3. Lógica del Formulario (Procesar POST)
if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    // A) Si el usuario pulsó "Añadir al Inventario" [cite: 23]
    if (isset($_POST['accion']) && $_POST['accion'] === 'insertar') {

        // Recoger datos del formulario
        $nombre = isset($_POST['nombre']) ? trim($_POST['nombre']) : '';
        $categoria = isset($_POST['categoria']) ? trim($_POST['categoria']) : '';
        $precio = isset($_POST['precio']) ? floatval($_POST['precio']) : 0;
        $cantidad = isset($_POST['cantidad']) ? intval($_POST['cantidad']) : 0;

        // Llamar a la función agregarProducto()
        $insertado = agregarProducto($inventario, $nombre, $categoria, $precio, $cantidad);

        if ($insertado) {
            $mensaje = "Producto añadido correctamente.";
        } else {
            $mensaje = "Error al añadir el producto. Revisa los datos.";
        }

        // Después de insertar, mostramos siempre el inventario completo
        $productos_a_mostrar = $inventario;
    }

    // B) Si el usuario pulsó "Filtrar Lista" [cite: 19]
    if (isset($_POST['accion']) && $_POST['accion'] === 'buscar') {

        // Recoger término de búsqueda
        $termino = isset($_POST['termino']) ? $_POST['termino'] : '';

        // Llamar a la función buscarProducto() y actualizar $productos_a_mostrar
        $productos_a_mostrar = buscarProducto($inventario, $termino);

        if (empty($productos_a_mostrar)) {
            $mensaje = 'No se encontraron productos que coincidan con "' . htmlspecialchars($termino) . '".';
        }
    }
}

?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <title>ElectroShop Gestión</title>
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color: #f4f4f9;
            padding: 20px;
        }

        h1 {
            text-align: center;
            color: #333;
            margin-bottom: 30px;
        }

        .container {
            max-width: 1000px;
            margin: 0 auto;
        }

        /* Grid para los formularios */
        .forms-container {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 20px;
            margin-bottom: 30px;
        }

        .card {
            background: white;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        }

        .card h3 {
            margin-top: 0;
            color: #0056b3;
            border-bottom: 2px solid #eee;
            padding-bottom: 10px;
        }

        input,
        select {
            width: 100%;
            padding: 10px;
            margin: 8px 0;
            border: 1px solid #ddd;
            border-radius: 4px;
            box-sizing: border-box;
        }

        /* Botones */
        .btn {
            width: 100%;
            padding: 10px;
            border: none;
            border-radius: 4px;
            color: white;
            font-weight: bold;
            cursor: pointer;
        }

        .btn-blue {
            background-color: #0056b3;
        }

        .btn-green {
            background-color: #28a745;
        }

        .btn-blue:hover {
            background-color: #004494;
        }

        .btn-green:hover {
            background-color: #218838;
        }

        .link-reset {
            display: block;
            text-align: center;
            margin-top: 10px;
            color: #0056b3;
            text-decoration: none;
        }

        /* Tabla */
        table {
            width: 100%;
            border-collapse: collapse;
            background: white;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        }

        th,
        td {
            padding: 12px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }

        th {
            background-color: #333;
            color: white;
        }

        /* Estilos de Alerta  */
        .alerta-stock {
            color: red;
            font-weight: bold;
            background-color: #ffeeee;
        }
    </style>
</head>

<body>

    <div class="container">
        <h1>⚡ ElectroShop Gestión</h1>

        <div class="forms-container">

            <div class="card">
                <h3>🔍 Buscar Producto</h3>
                <form method="POST" action="">
                    <input type="hidden" name="accion" value="buscar">
                    <label>Nombre del producto:</label>
                    <input type="text" name="termino" placeholder="Ej: Monitor...">
                    <button type="submit" class="btn btn-blue">Filtrar Lista</button>
                    <a href="" class="link-reset">Ver Todos</a>
                </form>
            </div>

            <div class="card">
                <h3>➕ Nuevo Ingreso</h3>
                <form method="POST" action="">
                    <input type="hidden" name="accion" value="insertar">
                    <label>Nombre Producto:</label>
                    <input type="text" name="nombre" required>

                    <label>Categoría:</label>
                    <select name="categoria">
                        <option value="Audio">Audio</option>
                        <option value="Video">Video</option>
                        <option value="Cables">Cables</option>
                        <option value="Periféricos">Periféricos</option>
                    </select>

                    <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 10px;">
                        <input type="number" name="precio" step="0.01" placeholder="Precio €" required>
                        <input type="number" name="cantidad" placeholder="Cant." required>
                    </div>

                    <button type="submit" class="btn btn-green">Añadir al Inventario</button>
                </form>
                <?php if ($mensaje): ?>
                    <p style="color: red; text-align: center;"><?php echo $mensaje; ?></p>
                <?php endif; ?>
            </div>
        </div>

        <h3>📦 Inventario Actual</h3>
        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Categoría</th>
                    <th>Producto</th>
                    <th>Precio</th>
                    <th>Stock</th>
                </tr>
            </thead>
            <tbody>
                <?php if (!empty($productos_a_mostrar)): ?>
                    <?php foreach ($productos_a_mostrar as $producto): ?>
                        <?php
                        $stock = isset($producto['stock']) ? (int) $producto['stock'] : 0;
                        $claseStock = $stock < 5 ? 'alerta-stock' : '';
                        $textoStock = $stock < 5 ? $stock . ' (Reponer)' : $stock;
                        ?>
                        <tr>
                            <td><?php echo htmlspecialchars($producto['id']); ?></td>
                            <td><?php echo htmlspecialchars($producto['categoria']); ?></td>
                            <td><?php echo htmlspecialchars($producto['nombre']); ?></td>
                            <td><?php echo number_format($producto['precio'], 2); ?> €</td>
                            <td class="<?php echo $claseStock; ?>"><?php echo $textoStock; ?></td>
                        </tr>
                    <?php endforeach; ?>
                <?php else: ?>
                    <tr>
                        <td colspan="5" style="text-align:center; color: #999;">
                            No hay productos para mostrar.
                        </td>
                    </tr>
                <?php endif; ?>
                </tbody>
        </table>
    </div>

</body>

</html>