<?php

namespace App\Postulation\Experiencia;

class Proyecto
{
    private $proyecto;
    private $anio;
    // private $enlaces;
    private $observacion;

    // public function __construct($anio, $proyecto, $enlaces, $observacion = null)
    public function __construct($anio, $proyecto, $observacion = null)
    {
        $this->proyecto = $proyecto;
        $this->anio = $anio;
        // $this->enlaces = $enlaces;
        $this->observacion = $observacion;
    }

    public function get()
    {
        return [
            'Proyecto'      => $this->proyecto,
            'Año'           => $this->anio,
            // 'Enlaces'       => $this->enlaces,
            'Observación'   => $this->observacion,
        ];
    }
}
