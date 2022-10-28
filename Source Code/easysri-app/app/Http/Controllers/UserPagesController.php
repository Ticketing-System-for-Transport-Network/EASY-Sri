<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\UserRegTopup;
use App\Models\Userpayment;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
class UserPagesController extends ParentController
{
   
    public function indexuserRegandTopup(){
        return view('pages.user.userRegandTopup');
    }

    public function indexuserpurchase(){
        return view('pages.user.userpurchase');
    }
    public function indexdashboard(){
        $role = Auth::user()->role;

        if($role == '1'){
            return view('pages/admin/AdminDashboard');
        }else{
            return view('pages.user.userdashboard');
        }
    }
}
