<?php

namespace App\Postulation\Skill;

class Skill implements ISkill
{
    private static $instances = [];
    private $arr_skills = [];

    protected function __construct() { }

    protected function __clone() { }

    public function __wakeup() { }

    public static function getInstance(): Skill
    {
        $skill = static::class;
        if (!isset(self::$instances[$skill])) {
            self::$instances[$skill] = new static();
        }

        return self::$instances[$skill];
    }

    public function add($skill)
    {
        array_push($this->arr_skills, $skill);
    }

    public function list()
    {
        $skill = collect();
        foreach ($this->arr_skills as $skill_item) {
            $skill = $skill->push($skill_item->get());
        }
        return $skill;
    }
}
