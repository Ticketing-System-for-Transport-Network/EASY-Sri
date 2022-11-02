<?php

namespace domain\Facades;

use domain\Services\InvalidTicketViewService;
use Illuminate\Support\Facades\Facade;

class InvalidTicketViewFacade extends Facade
{
    protected static function getFacadeAccessor()
    {
        return InvalidTicketViewService::class;
    }
}
