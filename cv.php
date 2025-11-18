<?php
/* =========================================
 TAREA 1: CREA TU "BASE DE DATOS" EN PHP
 Debes crear todas las variables y arrays aquí,
 siguiendo las instrucciones de los comentarios.
=========================================
*/

// --- TAREA 1.1: DATOS PERSONALES (UD3) ---
// 1. Crea una variable '$nombreCompleto' con un nombre (string).
$nombreCompleto = "Jesús de Federico";
// 2. Crea una variable '$tituloProfesional' con tu puesto (string).
$tituloProfesional = "Desarrollador Web Full Stack";
// 3. Crea una variable '$emailContacto' (string).
$emailContacto = "jesusdfb90@gmail.com";
// 4. Crea una variable '$telefono' (string).
$telefono = "+34 695 515 492";
// 5. Crea una variable '$disponibleParaEmpezar' (boolean - true o false).
$disponibleParaEmpezar = true;

// --- TAREA 1.2: RESUMEN Y HABILIDADES (UD4) ---
// 6. Crea una variable '$resumenProfesional' con un párrafo (string).
$resumenProfesional = "Desarrollador web con más de 5 años de experiencia en la creación de aplicaciones dinámicas y responsivas. Apasionado por las nuevas tecnologías y el aprendizaje continuo.";
// 7. Crea un array indexado '$habilidades'.
//    Debe contener al menos 4 habilidades (ej. 'PHP', 'HTML', 'CSS').
$habilidades = array("PHP", "HTML", "CSS", "JavaScript","Técnico","SQL");

// --- TAREA 1.3: REDES SOCIALES (UD4) ---
// 8. Crea un array asociativo '$redesSociales'.
//    - La CLAVE debe ser el nombre de la red (ej. 'GitHub', 'LinkedIn', 'Twitter').
//    - El VALOR debe ser la URL (ej. 'https://...').
//    - Añade al menos 3 redes (LinkedIn, Instagram, etc.).
$redesSociales = [
    "LinkedIn" => "https://www.linkedin.com/in/jesúsdefedericobedoya",
    "GitHub" => "https://github.com/Jesus-dfb"
    
];


// --- TAREA 1.4: EXPERIENCIA LABORAL (UD4 - Nivel Alto) ---
// 9. Crea un array multidimensional '$experiencia'.
//    - Debe ser un array indexado (para 2 trabajos).
//    - CADA elemento de este array debe ser un ARRAY ASOCIATIVO con:
//      - 'puesto' (string)
//      - 'empresa' (string)
//      - 'periodo' (string)
//      - 'tareas' (¡Este debe ser OTRO array indexado con 2-3 tareas!)
$experiencia = [
    [
        "puesto" => "Becario de Departamente técnico",
        "empresa" => "Novaschool",
        "periodo" => "abril 2024 - junio 2024",
        "tareas" => [
            "Atender peticiones de mantenimiento técnico del centro."
        ]
    ],
    [
        "puesto" => "Becario de Programador Junior",
        "empresa" => "Salutic Soluciones",
        "periodo" => "Enero 2025 - Febrero 2025",
        "tareas" => [
            "Desarrollar pequeñas páginas usando lenguaje PHP y JS para conectar con base de datos y usar peticiones AJAX.",   
        ]
    ]
];

// --- TAREA 1.5: FORMACIÓN (UD4 - Nivel Alto) ---
// 10. Crea un array multidimensional '$formacion'.
//     - Debe ser un array indexado (para 2 cursos).
//     - CADA elemento debe ser un ARRAY ASOCIATIVO con:
//       - 'titulo' (string)
//       - 'institucion' (string)
//       - 'periodo' (string)
$formacion = [
    [
        "titulo" => "Grado medio en Sistemas Microinformáticos y Redes",
        "institucion" => "IES Bezmiliana",
        "periodo" => "2022 - 2024"
    ],
    [
        "titulo" => "Grado superior en Desarrollo de Aplicaciones Web",
        "institucion" => "CESUR Málago Este",
        "periodo" => "2024 - 2026"
    ]
];

/* =========================================
 FIN DE LA TAREA 1
 ¡No escribas más código PHP aquí!
 Pasa a la TAREA 2 en el HTML de abajo.
=========================================
*/
?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale-1.0">
    <title>CV Dinámico PHP</title>
    <style>
        /* --- ESTILOS (AYUDA CSS) --- */
        body {
            font-family: Arial, sans-serif;
            background-color: #e9e9e9;
            color: #333;
            line-height: 1.6;
            margin: 0;
            padding: 0;
        }

        .container {
            max-width: 900px;
            margin: 20px auto;
            background: #fff;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
            border-radius: 8px;
        }

        .header {
            background-color: #2c3e50;
            color: white;
            padding: 40px;
            text-align: center;
            border-top-left-radius: 8px;
            border-top-right-radius: 8px;
        }

        .header h1 {
            margin: 0 0 5px 0;
            font-size: 2.8em;
        }

        .header h2 {
            margin: 0;
            font-weight: 300;
            font-size: 1.6em;
            color: #1abc9c;
        }

        .contact-info {
            font-size: 0.9em;
            margin-top: 15px;
            color: #bdc3c7;
        }

        .contact-info span {
            margin: 0 10px;
        }

        .main-content {
            display: flex;
            padding: 30px;
        }

        .sidebar {
            flex: 1;
            padding-right: 30px;
            border-right: 2px solid #f4f4f4;
        }

        .cv-content {
            flex: 2;
            padding-left: 30px;
        }

        .cv-section {
            margin-bottom: 25px;
        }

        .cv-section h3 {
            color: #2c3e50;
            border-bottom: 2px solid #1abc9c;
            padding-bottom: 5px;
            margin-top: 0;
        }

        /* --- Estado (IF) --- */
        .estado {
            padding: 12px;
            border-radius: 5px;
            font-weight: bold;
            text-align: center;
            margin-bottom: 20px;
        }

        .estado.contratable {
            background: #d4edda;
            color: #155724;
        }

        .estado.no-contratable {
            background: #f8d7da;
            color: #721c24;
        }

        /* --- Habilidades --- */
        .skills-list {
            list-style: none;
            padding: 0;
            margin: 0;
            display: flex;
            flex-wrap: wrap;
        }

        .skill-item {
            background: #f0f0f0;
            color: #333;
            padding: 5px 12px;
            border-radius: 15px;
            margin: 4px;
            font-size: 0.9em;
        }

        /* --- Experiencia y Formación --- */
        .job,
        .education-item {
            margin-bottom: 20px;
        }

        .job h4,
        .education-item h4 {
            margin: 0;
            font-size: 1.2em;
            color: #333;
        }

        .job-company,
        .education-institution {
            color: #1abc9c;
            font-weight: bold;
            font-size: 1em;
            margin-bottom: 5px;
        }

        .job-period,
        .education-period {
            font-size: 0.85em;
            color: #777;
            font-style: italic;
        }

        .job-tasks {
            padding-left: 20px;
            font-size: 0.95em;
        }

        /* --- Redes Sociales --- */
        footer {
            background: #333;
            color: white;
            text-align: center;
            padding: 20px 30px;
            border-bottom-left-radius: 8px;
            border-bottom-right-radius: 8px;
        }

        footer a {
            color: white;
            text-decoration: none;
            margin: 0 12px;
            font-size: 1.1em;
            transition: color 0.3s;
        }

        footer a:hover {
            color: #1abc9c;
        }
    </style>
</head>

<body>

    <div class="container">

        <header class="header">
            <h1>
                <?php
                // TAREA 2.1: Imprime la variable '$nombreCompleto' que creaste en la TAREA 1.
                // Pista: Usa 'echo'.
                echo $nombreCompleto;
                ?>
            </h1>
            <h2>
                <?php
                // TAREA 2.2: Imprime la variable '$tituloProfesional'.
                echo $tituloProfesional;
                ?>
            </h2>
            <div class="contact-info">
                <span>
                    <?php
                    // TAREA 2.3: Imprime la variable '$emailContacto'.
                    echo $emailContacto;
                    ?>
                </span> |
                <span>
                    <?php
                    // TAREA 2.4: Imprime la variable '$telefono'.
                    echo $telefono;
                    ?>
                </span>
            </div>
        </header>

        <div class="main-content">

            <aside class="sidebar">

                <div class="cv-section">
                    <h3>Disponibilidad</h3>
                    <?php
                    // TAREA 2.5: Estructura de control IF / ELSE (UD3)
                    // Comprueba si la variable '$disponibleParaEmpezar' es 'true'.
                    // Si es 'true', imprime el HTML de la clase 'estado contratable'.
                    // Si es 'false', imprime el HTML de la clase 'estado no-contratable'.
                    if ($disponibleParaEmpezar) {
                        echo '<div class="estado contratable">Disponible para empezar</div>';
                    } else {
                        echo '<div class="estado no-contratable">No disponible para empezar</div>';
                    }                    
                    ?>
                </div>

                <div class="cv-section">
                    <h3>Habilidades Técnicas</h3>
                    <ul class="skills-list">
                        <?php
                        // TAREA 2.6: Bucle FOREACH simple (UD4)
                        // Recorre el array '$habilidades' que creaste.
                        // Por cada '$habilidad' en el array, imprime un <li>
                        // Ejemplo: echo '<li class="skill-item">' . $habilidad . '</li>';
                        foreach ($habilidades as $habilidad) {
                            echo '<li class="skill-item">' . $habilidad . '</li>';
                        }
                        
                        ?>
                    </ul>
                </div>

            </aside>

            <main class="cv-content">

                <div class="cv-section" id="resumen">
                    <h3>Resumen Profesional</h3>
                    <p>
                        <?php
                        // TAREA 2.7: Imprime la variable '$resumenProfesional'.
                        echo $resumenProfesional;
                        ?>
                    </p>
                </div>

                <div class="cv-section" id="experiencia">
                    <h3>Experiencia Laboral</h3>

                    <?php
                    // TAREA 2.8: Bucle FOREACH ANIDADO (UD4)
                    // 1. Inicia un bucle 'foreach' para recorrer '$experiencia' (cada $trabajo).
                    // 2. Dentro, imprime el HTML para <div class="job">.
                    //    (usa 'echo' para $trabajo['puesto'], $trabajo['empresa'], etc.)
                    // 3. Dentro del <ul class="job-tasks">, inicia OTRO 'foreach'
                    //    para recorrer $trabajo['tareas'] (cada $tarea).
                    // 4. Imprime cada $tarea como un <li>.
                    foreach ($experiencia as $trabajo) {
                        echo '<div class="job">';
                        echo '<h4>' . $trabajo['puesto'] . '</h4>';
                        echo '<div class="job-company">' . $trabajo['empresa'] . '</div>';
                        echo '<div class="job-period">' . $trabajo['periodo'] . '</div>';
                        echo '<ul class="job-tasks">';
                        foreach ($trabajo['tareas'] as $tarea) {
                            echo '<li>' . $tarea . '</li>';
                        }
                        echo '</ul>';
                        echo '</div>';
                    }
                    
                    ?>

                </div>

                <div class="cv-section" id="formacion">
                    <h3>Formación</h3>

                    <?php
                    // TAREA 2.9: Bucle FOREACH multidimensional (UD4)
                    // 1. Inicia un bucle 'foreach' para recorrer '$formacion' (cada $curso).
                    // 2. Dentro, imprime el HTML para <div class="education-item">
                    //    (usa 'echo' para $curso['titulo'], $curso['institucion'], etc.)
                    
                    foreach ($formacion as $curso) {
                        echo '<div class="education-item">';
                        echo '<h4>' . $curso['titulo'] . '</h4>';
                        echo '<div class="education-institution">' . $curso['institucion'] . '</div>';
                        echo '<div class="education-period">' . $curso['periodo'] . '</div>';
                        echo '</div>';
                    }                    
                    ?>

                </div>
            </main>
        </div>

        <footer class="footer">
            <?php
            // TAREA 2.10: Bucle FOREACH (Array Asociativo) (UD4)
            // 1. Recorre el array '$redesSociales' para obtener la CLAVE ($red) y el VALOR ($url).
            //    (Pista: foreach ($redesSociales as $red => $url) { ... })
            // 2. Imprime la etiqueta <a> completa.
            //    (La $url va en 'href' y la $red va como texto del enlace)
            foreach ($redesSociales as $red => $url) {
                echo '<a href="' . $url . '" target="_blank">' . $red . '</a>';
            }
            ?>
        </footer>
    </div>

</body>

</html>