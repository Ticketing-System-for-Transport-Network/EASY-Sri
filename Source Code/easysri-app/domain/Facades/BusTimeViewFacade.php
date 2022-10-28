<?php

namespace domain\Facades;

use domain\Services\BusTimeViewService;
use Illuminate\Support\Facades\Facade;

class BusTimeViewFacade extends Facade
{
    protected static function getFacadeAccessor()
    {
        return BusTimeViewService::class;
    }
}
