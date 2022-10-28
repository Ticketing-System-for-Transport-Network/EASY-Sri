<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Esay_SriHomeController extends Controller
{
    public function indexuserdashboard(){
        return view('pages.user.userdashboard');
    }

}
