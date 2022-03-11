<?php

namespace App\Postulation\Experience;

class Project
{
    private $project;
    private $year;
    // private $links;
    private $description;

    // public function __construct($year, $project, $links, $description = null)
    public function __construct($year, $project, $description = null)
    {
        $this->project = $project;
        $this->year = $year;
        // $this->links = $links;
        $this->description = $description;
    }

    public function get()
    {
        return [
            'Project'      => $this->project,
            'Year'           => $this->year,
            // 'links'       => $this->links,
            'Description'   => $this->description,
        ];
    }
}
