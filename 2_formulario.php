<?php

/**
 * 
 * 2. Formularios
 * - Crear una lista iterando el array anterior que muestre todos los alumnos y sus notas.
 * - Crear un formulario que permita seleccionar la asignatura a mostrar de los estudiantes. Utilizar o un select o un grupo de radio-buttons.
 * - Filtrar las asignaturas de manera similar al apartado anterior
 * - Crear un fichero json con los datos de cada alumno
 * - Decodificarlo y mostrar la nota media de cada alumno por pantalla
 * 
 * 
 */
require_once("./1_arrays.php");

// var_dump($notas);


$notasFiltradas = $notas;


$asignaturaSeleccionada = $_POST['asignatura'];

// if ($asignaturaSeleccionada == "dwec"){
//     $notasFiltradas 
// }
if ($asignaturaSeleccionada != null) {
    foreach ($notas as $key => $value) {
        $notasFiltradas[$key] = [$asignaturaSeleccionada => $value[$asignaturaSeleccionada]];
    }
}

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <ol>
        <?php foreach ($notasFiltradas as $key => $value) { ?>
            <li><?= $key ?>:
                <ul>
                    <?php foreach ($value as $clave => $valor) {
                        echo "<li>$clave:$valor</li>";
                    } ?>
                </ul>
            </li>
        <?php } ?>
    </ol>


    <form action="./2_formulario.php" method="post">
        <!-- <input type="radio" name="asignatura" id="todas" value="todas">
        <label for="todas">TODAS</label>
        <br> -->
        <input type="radio" name="asignatura" id="DWES" value="DWES">
        <label for="DWES">DWES</label>
        <br>
        <input type="radio" name="asignatura" id="DWEC" value="DWEC">
        <label for="DWEC">DWEC</label>
        <br>

        <input type="submit" value="Enviar">
    </form>
</body>

</html>