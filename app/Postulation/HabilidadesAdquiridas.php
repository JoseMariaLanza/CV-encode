<?php

use App\Postulation\Habilidad\Habilidad;
use App\Postulation\Habilidad\Herramienta;
use App\Postulation\Habilidad\Tecnologia;
use App\Postulation\Habilidad\Idioma;
use App\Postulation\Habilidad\Conocimiento;

class HabilidadesAdquiridas
{
    public function addHabilidad()
    {
        $habilidad = Habilidad::getInstance();
        // HERRAMIENTAS
        $habilidad->add(new Herramienta('Microsoft SQL Server'));
        $habilidad->add(new Herramienta('XAMPP'));
        $habilidad->add(new Herramienta('MySQL Workbench'));
        $habilidad->add(new Herramienta('GitHub'));
        $habilidad->add(new Herramienta('Gitlab'));
        $habilidad->add(new Herramienta('SCRUM'));
        $habilidad->add(new Herramienta('Jira'));
        $habilidad->add(new Herramienta('AdobeXD'));
        // TECNOLOGÍAS
        $habilidad->add(new Tecnologia('PHP         ⭐⭐⭐⭐'));
        $habilidad->add(new Tecnologia('Laravel     ⭐⭐⭐⭐'));
        $habilidad->add(new Tecnologia('JavaScript  ⭐⭐⭐⭐'));
        $habilidad->add(new Tecnologia('React       ⭐⭐⭐⭐'));
        $habilidad->add(new Tecnologia('MySql       ⭐⭐⭐⭐'));
        $habilidad->add(new Tecnologia('Git         ⭐⭐⭐⭐'));
        $habilidad->add(new Tecnologia('API REST    ⭐⭐⭐'));
        $habilidad->add(new Tecnologia('C#          ⭐⭐⭐'));
        $habilidad->add(new Tecnologia('HTML        ⭐⭐⭐'));
        $habilidad->add(new Tecnologia('CSS         ⭐⭐'));
        $habilidad->add(new Tecnologia('Python      ⭐⭐'));
        // IDIOMAS
        $habilidad->add(new Idioma('Ingles      ⭐⭐⭐'));
        // CONOCIMIENTOS
        $habilidad->add(new Conocimiento('POO'));
        $habilidad->add(new Conocimiento('Arquitectura en Capas'));
        $habilidad->add(new Conocimiento('MVC'));
        $habilidad->add(new Conocimiento('Patrones de diseño'));
        $habilidad->add(new Conocimiento('Buenas prácticas'));
    }

    public function getHabilidades()
    {
        $habilidades = Habilidad::getInstance();
        return $habilidades->list();
    }
}
