<?php

namespace App\Http\Controllers;

use App\Models\BusTimeTable;
use domain\Facades\RocketInsertFacade;
use Illuminate\Http\Request;
use App\Http\Requests\RocketFormRequest;

class BusTimeInsertController extends Controller
{
    public function bustimeinsertview()
    {
        return view('pages.admin.bustimetableinsert');
    }
}
