<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <?php
    class Tarea
    {
        public $id;
        public $descripcion;
        public $prioridad; // "Alta" o "Baja"
    
        public function __construct($id, $descripcion, $prioridad)
        {
            $this->id = $id;
            $this->descripcion = $descripcion;
            $this->prioridad = $prioridad;
        }
    }
    ?>
</head>

<body>

</body>

</html>