<?php

namespace App\Postulation\Experiencia;

class Experiencia implements IExperiencia
{
    private static $instances = [];
    private $arr_experiencia = [];

    protected function __construct() { }

    protected function __clone() { }

    public function __wakeup() { }

    public static function getInstance(): Experiencia
    {
        $exp = static::class;
        if (!isset(self::$instances[$exp])) {
            self::$instances[$exp] = new static();
        }

        return self::$instances[$exp];
    }

    public function add($experiencia)
    {
        array_push($this->arr_experiencia, $experiencia);
    }

    public function list()
    {
        $experiencia = collect();
        foreach ($this->arr_experiencia as $exp) {
            $experiencia = $experiencia->push($exp->get());
        }
        return $experiencia;
    }
}
