<?php

namespace App\Postulation\Experiencia;

class Trabajo
{
    private $empresa;
    private $puesto;
    private $periodo;

    public function __construct($empresa, $puesto, $periodo)
    {
        $this->empresa = $empresa;
        $this->puesto = $puesto;
        $this->periodo = $periodo;
    }

    public function get()
    {
        return [
            'Empresa'   => $this->empresa,
            'Puesto'    => $this->puesto,
            'Período'   => $this->periodo,
        ];
    }
}
