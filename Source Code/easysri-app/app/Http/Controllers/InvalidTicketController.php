<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class InvalidTicketController extends ParentController
{
    public function checkvalid()
    {
        return view('pages.admin.invalidtickets');
    }
}
