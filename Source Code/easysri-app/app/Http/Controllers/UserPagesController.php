<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserPagesController extends Controller
{
    public function indexuserdashboard(){
        return view('pages.user.userdashboard');
    }

    public function indexuserRegandTopup(){
        return view('pages.user.userRegandTopup');
    }

    public function indexuserpurchase(){
        return view('pages.user.userpurchase');
    }
}
