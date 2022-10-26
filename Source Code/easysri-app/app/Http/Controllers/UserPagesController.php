<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserPagesController extends Controller
{
    public function indexuserview(){
        return view('Pages/User/Home');
    }
}
