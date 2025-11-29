<?php
require_once 'Tarea.php';

/*
 * 1) Simulamos una lista de tareas inicial con un Array
 *    (al recargar la página, se vuelve a este estado base).
 */
$tareas = [
    new Tarea(0, "Comprar pan", "Alta"),
    new Tarea(1, "Estudiar DWES", "Alta"),
    new Tarea(2, "Ver serie", "Baja"),
];

/*
 * 2) Lógica para AÑADIR y ELIMINAR
 *    Usamos if/else y los datos recibidos por GET / POST.
 */

// Añadir tarea (viene por POST del formulario)
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $descripcion = isset($_POST['descripcion']) ? trim($_POST['descripcion']) : '';
    $prioridad   = isset($_POST['prioridad']) ? $_POST['prioridad'] : 'Baja';

    if ($descripcion !== '') {
        // El id será el siguiente número disponible
        $nuevoId = count($tareas);
        $tareas[] = new Tarea($nuevoId, $descripcion, $prioridad);
    }
}

// Eliminar tarea (viene por GET: ?accion=eliminar&id=X)
if (isset($_GET['accion']) && $_GET['accion'] === 'eliminar' && isset($_GET['id'])) {
    $idEliminar = (int) $_GET['id'];

    // Filtramos el array para quitar la tarea cuyo id coincide
    $tareasFiltradas = [];
    foreach ($tareas as $t) {
        if ($t->id !== $idEliminar) {
            $tareasFiltradas[] = $t;
        }
    }
    $tareas = $tareasFiltradas;
}

?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Lista de Tareas (CRUD Array)</title>
    <style>
        table, th, td { border: 1px solid #000; border-collapse: collapse; padding: 4px; }
        th { background-color: #eee; }
    </style>
</head>
<body>

<h1>Lista de Tareas (CRUD Array)</h1>

<form method="post" action="index.php">
    Descripción:
    <input type="text" name="descripcion" required>

    Prioridad:
    <select name="prioridad">
        <option value="Alta">Alta</option>
        <option value="Baja">Baja</option>
    </select>

    <button type="submit">Añadir Tarea</button>
</form>

<br>

<table>
    <tr>
        <th>ID</th>
        <th>Descripción</th>
        <th>Prioridad</th>
        <th>Acción</th>
    </tr>

    <?php foreach ($tareas as $tarea): ?>
        <tr>
            <td><?= htmlspecialchars($tarea->id) ?></td>
            <td><?= htmlspecialchars($tarea->descripcion) ?></td>
            <td><?= htmlspecialchars($tarea->prioridad) ?></td>
            <td>
                <a href="index.php?accion=eliminar&id=<?= urlencode($tarea->id) ?>">Eliminar</a>
            </td>
        </tr>
    <?php endforeach; ?>

</table>

<p>
    Nota: si recargas la página con F5 sin enviar de nuevo el formulario,
    la lista volverá al estado original porque todo está en Arrays en memoria
    (no hay base de datos).
</p>

</body>
</html>
