<?php

namespace App\Postulation\Habilidad;

class Idioma
{
    private $idioma;

    public function __construct($idioma)
    {
        $this->idioma = $idioma;
    }

    public function get()
    {
        return $this->idioma;
    }
}
