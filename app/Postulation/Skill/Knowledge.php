<?php

namespace App\Postulation\Skill;

class Knowledge
{
    private $knowledge;

    public function __construct($knowledge)
    {
        $this->knowledge = $knowledge;
    }

    public function get()
    {
        return $this->knowledge;
    }
}
