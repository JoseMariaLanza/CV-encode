<?php

namespace App\Postulation\Experience;

class Experience implements IExperience
{
    private static $instances = [];
    private $arr_experience = [];

    protected function __construct() { }

    protected function __clone() { }

    public function __wakeup() { }

    public static function getInstance(): Experience
    {
        $exp = static::class;
        if (!isset(self::$instances[$exp])) {
            self::$instances[$exp] = new static();
        }

        return self::$instances[$exp];
    }

    public function add($experience)
    {
        array_push($this->arr_experience, $experience);
    }

    public function list()
    {
        $experience = collect();
        foreach ($this->arr_experience as $exp) {
            $experience = $experience->push($exp->get());
        }
        return $experience;
    }
}
