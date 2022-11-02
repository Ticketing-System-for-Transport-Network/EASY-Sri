<?php

namespace App\Http\Controllers;

use App\Models\InvalidTicket;
use domain\Facades\InvalidTicketViewFacade;
use Illuminate\Http\Request;

class InvalidTicketController extends ParentController
{
    public function checkvalid()
    {
        $response['tickets'] = InvalidTicketViewFacade::all();
        return view('pages.admin.invalidtickets')->with($response);
    }
}
