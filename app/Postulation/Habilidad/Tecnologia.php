<?php

namespace App\Postulation\Habilidad;

class Tecnologia
{
    private $tecnologia;

    public function __construct($tecnologia)
    {
        $this->tecnologia = $tecnologia;
    }

    public function get()
    {
        return $this->tecnologia;
    }
}
