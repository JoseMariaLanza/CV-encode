<?php

namespace App\Postulation;
use App\Postulation\Experiencia\Experiencia;
use App\Postulation\Experiencia\Trabajo;
use App\Postulation\Experiencia\Proyecto;

class Perfil
{
    public function getInformacionPersonal()
    {
        return [
            'nombre_completo'   => 'José María Lanza',
            'email'             => 'lanza.josemaria@gmail.com',
            'telefono'          => '(381)527420',
            'github'            => 'https://github.com/JoseMariaLanza'
        ];
    }

    public function getAcercaDe()
    {
        return "Hola!, soy un progamador al cual le apasiona lo que hace,
                estoy en constante capacitación y búsqueda de desafios.
                Me encantan las buenas prácticas y un código escalable.";
    }

    public function addExperiencia()
    {
        $experiencia = Experiencia::getInstance();
        // TRABAJOS
        $experiencia->add(
            new Trabajo('Tensolite', 'Desarrollador Full-Stack', '2021 - Actualmente'));
        $experiencia->add(
            new Trabajo('Freelance', 'Desarrollador', '2016 - 2021'));
        // PROYECTOS
        $experiencia->add(
            new Proyecto('2021', 'CV-encode', 'Tecnologías: Laravel', 'En desarrollo'));
        $experiencia->add(
            new Proyecto('2021', 'CRUD Desarrolladores', 'Tecnologías: Laravel, React'));
        $experiencia->add(
            new Proyecto('2020', 'Escuelas Center - Web App', 'En desarrollo'));
        $experiencia->add(
            new Proyecto('2020', 're.Viewer', 'Tecnologías: HTML, CSS, JavaScript, Sólo mobile actualmente'));
        $experiencia->add(
            new Proyecto('2019', 'MiBar/Restto', 'Tecnologías: Laravel, Bootstrap, Vue.js'));
        $experiencia->add(
            new Proyecto('2016', 'Aplicación de Ventas', 'Tecnologías: C#'));
    }

    public function getExperiencia()
    {
        $experiencia = Experiencia::getInstance();
        return $experiencia->list();
    }
}
