<?php

namespace App\Postulation\Experience;

class Work
{
    private $company;
    private $position;
    private $period;

    public function __construct($company, $position, $period)
    {
        $this->company = $company;
        $this->position = $position;
        $this->period = $period;
    }

    public function get()
    {
        return [
            'Company'   => $this->company,
            'Position'    => $this->position,
            'Period'   => $this->period,
        ];
    }
}
