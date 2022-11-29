<?php

/**
 * Controlador del formulario
 */



$asignatura = new Asignatura($_POST["nombre"], $_POST["profesor"], $_POST["horas"]);

$asignatura->guardar();
