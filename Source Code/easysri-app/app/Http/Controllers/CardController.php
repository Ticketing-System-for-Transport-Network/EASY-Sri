<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CardController extends Controller
{
    public function view()
    {
        return view('pages.user.smartidview');
    }
}
