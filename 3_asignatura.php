<?php

/**
 * Clase Asignatura
 */

class Asignatura
{
    private $nombre;
    private $horas;
    private $profesor;

    //contruct
    //getters y setters
    //toString



    public function toArray()
    {
        $arrayInstancia = [
            "nombre" => $this->nombre,
            "horas" => $this->horas,
            "profesor" => $this->profesor,
        ];
        return $arrayInstancia;
    }


    public function guardar()
    {
        //leer datos json
        file_get_contents();

        //decodificar datos.json
        $todasLasAsignaturas = json_decode();

        //convertir la instancia a un array
        
        //hacer push a datos.json decodificado
        array_push($todasLasAsignaturas, $this->toArray())
        //codificarlo en json
        //y guardarlo

    }
}
