<?php

namespace domain\Services;

use App\Models\OverCrowdNetwork;

class OverCrowdViewService
{
    protected $crowd;

    public function __construct()
    {
        $this->crowd = new OverCrowdNetwork();
    }

    public function all()
    {
        return $this->crowd->all();
    }
}
