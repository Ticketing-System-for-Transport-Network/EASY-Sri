<?php

namespace domain\Services;

use App\Models\BusTimeTable;

class BusTimeInsertService
{
    protected $bus;

    public function __construct()
    {
        $this->bus = new BusTimeTable();
    }

    public function store($data)
    {
        $this->bus->create($data);
    }
}
