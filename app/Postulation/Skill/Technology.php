<?php

namespace App\Postulation\Skill;

class Technology
{
    private $technology;

    public function __construct($technology)
    {
        $this->technology = $technology;
    }

    public function get()
    {
        return $this->technology;
    }
}
