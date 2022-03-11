<?php

use App\Postulation\Skill\Skill;
use App\Postulation\Skill\Tool;
use App\Postulation\Skill\Technology;
use App\Postulation\Skill\Language;
use App\Postulation\Skill\Knowledge;

class AcquiredSkills
{
    public function addSkill()
    {
        $skill = Skill::getInstance();
        // TOOLS
        $skill->add(new Tool('Microsoft SQL Server'));
        $skill->add(new Tool('XAMPP'));
        $skill->add(new Tool('MySQL Workbench'));
        $skill->add(new Tool('GitHub'));
        $skill->add(new Tool('Gitlab'));
        $skill->add(new Tool('SCRUM'));
        $skill->add(new Tool('Jira'));
        $skill->add(new Tool('AdobeXD'));
        // TECHNOLOGIES
        $skill->add(new Technology('PHP         ⭐⭐⭐⭐'));
        $skill->add(new Technology('Laravel     ⭐⭐⭐⭐'));
        $skill->add(new Technology('JavaScript  ⭐⭐⭐⭐'));
        $skill->add(new Technology('React       ⭐⭐⭐⭐'));
        $skill->add(new Technology('MySql       ⭐⭐⭐⭐'));
        $skill->add(new Technology('Git         ⭐⭐⭐⭐'));
        $skill->add(new Technology('API REST    ⭐⭐⭐'));
        $skill->add(new Technology('C#          ⭐⭐⭐'));
        $skill->add(new Technology('HTML        ⭐⭐⭐'));
        $skill->add(new Technology('CSS         ⭐⭐'));
        $skill->add(new Technology('Python      ⭐⭐'));
        // LANGUAGES
        $skill->add(new Language('Spanish      ⭐⭐⭐⭐⭐'));
        $skill->add(new Language('English      ⭐⭐⭐'));
        // KNOWLEDGES
        $skill->add(new Knowledge('POO'));
        $skill->add(new Knowledge('Layouts Architecture'));
        $skill->add(new Knowledge('MVC'));
        $skill->add(new Knowledge('Design patterns'));
        $skill->add(new Knowledge('Good practices'));
    }

    public function getskilles()
    {
        $skills = skill::getInstance();
        return $skills->list();
    }
}
