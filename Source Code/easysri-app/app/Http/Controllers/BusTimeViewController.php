<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BusTimeViewController extends Controller
{
    public function busview()
    {
        return view('pages.admin.bustimetableview');
    }
}
