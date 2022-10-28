<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BusTimeViewController extends Controller
{
    public function bustimetableview()
    {
        return view('pages.admin.bustimetableview');
    }
}
