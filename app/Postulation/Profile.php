<?php

namespace App\Postulation;
use App\Postulation\Experience\Experience;
use App\Postulation\Experience\Work;
use App\Postulation\Experience\Project;

class Profile
{
    public function getPersonalInfo()
    {
        return [
            'nombre_completo'   => 'José María Lanza',
            'email'             => 'lanza.josemaria@gmail.com',
            'telefono'          => '+549(381)5273420',
            'github'            => 'https://github.com/JoseMariaLanza'
        ];
    }

    public function getAbout()
    {
        return "Hi!, I am a programmer who is passionate about what he does,
        I am constantly training and looking for challenges.
        I love good practices and scalable code.";
    }

    public function addExperience()
    {
        $experience = Experience::getInstance();
        // WORKS
        $experience->add(
            new Work('Tensolite', 'Full-Stack developer', '2021 - Currently'));
        $experience->add(
            new Work('Freelance', 'softwareDeveloper', '2016 - 2021'));
        // PROJECTS
        $experience->add(
            new Project('2021', 'CV-encode', 'Technologies: Laravel', 'Stopped'));
        $experience->add(
            new Project('2021', 'CRUD Devs', 'Technologies: Laravel, React'));
        $experience->add(
            new Project('2020', 'Center Schools - Web App', 'On development'));
        $experience->add(
            new Project('2020', 're.Viewer', 'Technologies: HTML, CSS, JavaScript, Only mobile currently'));
        $experience->add(
            new Project('2019', 'MiBar/Restto', 'Technologies: Laravel, Bootstrap, Vue.js'));
        $experience->add(
            new Project('2016', 'Sales App', 'Technologies: C#'));
    }

    public function getExperience()
    {
        $experience = Experience::getInstance();
        return $experience->list();
    }
}
