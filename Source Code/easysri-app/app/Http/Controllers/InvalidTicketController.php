<?php

namespace App\Http\Controllers;

use App\Models\InvalidTicket;
use domain\Facades\InvalidTicketViewFacade;
use Illuminate\Http\Request;

class InvalidTicketController extends ParentController
{
    public function checkvalid(Request $request)
    {
        $search = $request['search'] ?? "";
        if($search!= "") {
            $response['tickets'] = InvalidTicket::where('card_no', 'LIKE', "%$search%")->get();
        } else {
            $response['tickets'] = InvalidTicketViewFacade::all();
        }
        return view('pages.admin.invalidtickets')->with($response);
    }
}
