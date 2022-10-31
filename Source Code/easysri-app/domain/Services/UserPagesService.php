<?php

namespace domain\Services;
use App\Models\BusTimeTable;
use App\Models\User;


class UserPagesService{
   
    protected $route;

    public function __construct()
    {
        $this->route = new BusTimeTable();
    }  

}