<?php

namespace App\Postulation\Habilidad;

class Conocimiento
{
    private $conocimiento;

    public function __construct($conocimiento)
    {
        $this->conocimiento = $conocimiento;
    }

    public function get()
    {
        return $this->conocimiento;
    }
}
