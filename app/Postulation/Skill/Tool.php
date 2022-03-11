<?php

namespace App\Postulation\Skill;

class Tool
{
    private $tool;

    public function __construct($tool)
    {
        $this->tool = $tool;
    }

    public function get()
    {
        return $this->tool;
    }
}
