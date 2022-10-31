<?php

namespace domain\Facades;

use domain\Services\UserPagesService;
use Illuminate\Support\Facades\Facade;

class UserPagesFacade extends Facade{
    protected static function getFacadeAccessor(){
        return UserPagesService::class;
    }
    
}