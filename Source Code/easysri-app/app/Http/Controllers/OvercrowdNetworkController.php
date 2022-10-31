<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OvercrowdNetworkController extends Controller
{
    public function networkview()
    {
        return view('pages.admin.overcrowdenetworkview');
    }
}
