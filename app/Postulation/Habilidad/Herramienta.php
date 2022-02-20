<?php

namespace App\Postulation\Habilidad;

class Herramienta
{
    private $herramienta;

    public function __construct($herramienta)
    {
        $this->herramienta = $herramienta;
    }

    public function get()
    {
        return $this->herramienta;
    }
}
