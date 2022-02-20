<?php

namespace App\Postulation\Habilidad;

class Habilidad implements IHabilidad
{
    private static $instances = [];
    private $arr_habilidades = [];

    protected function __construct() { }

    protected function __clone() { }

    public function __wakeup() { }

    public static function getInstance(): Habilidad
    {
        $hab = static::class;
        if (!isset(self::$instances[$hab])) {
            self::$instances[$hab] = new static();
        }

        return self::$instances[$hab];
    }

    public function add($habilidad)
    {
        array_push($this->arr_habilidades, $habilidad);
    }

    public function list()
    {
        $habilidad = collect();
        foreach ($this->arr_habilidades as $hab) {
            $habilidad = $habilidad->push($hab->get());
        }
        return $habilidad;
    }
}
