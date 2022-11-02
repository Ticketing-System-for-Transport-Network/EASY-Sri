<?php

namespace domain\Facades;

use domain\Services\FinanceViewService;
use Illuminate\Support\Facades\Facade;

class FinanceViewFacade extends Facade
{
    protected static function getFacadeAccessor()
    {
        return FinanceViewService::class;
    }
}
