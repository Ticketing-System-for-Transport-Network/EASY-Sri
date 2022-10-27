<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BusTimeInsertController extends Controller
{
    public function bustimeinsertview()
    {
        return view('pages.admin.bustimetableinsert');
    }
}
