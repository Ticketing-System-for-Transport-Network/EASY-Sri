<?php

namespace domain\Facades;

use domain\Services\OverCrowdViewService;
use Illuminate\Support\Facades\Facade;

class OverCrowdViewFacade extends Facade
{
    protected static function getFacadeAccessor()
    {
        return OverCrowdViewService::class;
    }
}


