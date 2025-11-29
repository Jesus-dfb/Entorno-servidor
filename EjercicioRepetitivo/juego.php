<?php
class Jugador
{
    private string $apodo;
    private int $puntos;

    public function __construct(string $apodo, int $puntos)
    {
        $this->apodo = $apodo;
        $this->puntos = $puntos;
    }

    public function getInfo(): string
    {
        return "Jugador: {$this->apodo} ({$this->puntos} pts)";
    }
}

$equipo = [];

$equipo[] = new Jugador("DragonSlayer", 120);
$equipo[] = new Jugador("Shadow", 95);
$equipo[] = new Jugador("PixeLover", 60);
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Equipo de Jugadores</title>
</head>
<body>
    <ul>
        <?php foreach ($equipo as $jugador): ?>
            <li><?php echo $jugador->getInfo(); ?></li>
        <?php endforeach; ?>
    </ul>
</body>
</html>