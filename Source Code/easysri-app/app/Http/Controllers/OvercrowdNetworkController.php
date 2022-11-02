<?php

namespace App\Http\Controllers;

use App\Models\OverCrowdNetwork;
use domain\Facades\OverCrowdViewFacade;
use Illuminate\Http\Request;

class OvercrowdNetworkController extends ParentController
{
    public function networkview(Request $request)
    {
        $search = $request['search'] ?? "";
        if ($search != "") {
            $response['crowds'] = OverCrowdNetwork::where('o_date', 'LIKE', "%$search%")->orWhere('route_id', 'LIKE', "%$search%")->get();
        } else {
            $response['crowds'] = OverCrowdViewFacade::all();
        }
        return view('pages.admin.overcrowdenetworkview')->with($response);
    }
}
