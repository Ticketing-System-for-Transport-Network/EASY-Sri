<?php

namespace domain\Facades;

use domain\Services\BusTimeInsertService;
use Illuminate\Support\Facades\Facade;

class BusTimeInsertFacade extends Facade
{
    protected static function getFacadeAccessor()
    {
        return BusTimeInsertService::class;
    }
}
