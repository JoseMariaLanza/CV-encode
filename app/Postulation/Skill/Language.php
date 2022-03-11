<?php

namespace App\Postulation\Skill;

class Language
{
    private $language;

    public function __construct($language)
    {
        $this->language = $language;
    }

    public function get()
    {
        return $this->language;
    }
}
