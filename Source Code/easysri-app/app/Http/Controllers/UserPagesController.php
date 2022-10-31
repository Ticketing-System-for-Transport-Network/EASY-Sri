<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\UserRegTopup;
use App\Models\Userpayment;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
class UserPagesController extends ParentController
{
    public function indexuserRegandTopup(){
       
        return view('pages.user.userRegandTopup');
    }

    public function indexuserpurchase(){
        $tempid=auth()->user()->id;  
        $userdetails = UserRegTopup::where('login_id',$tempid)->get();
        $initial = UserRegTopup::where('login_id',$tempid)->sum('Initalpay');
        $tamount = Userpayment::where('userregid',$tempid)->sum('amount');
        $totalPrice= $initial+$tamount;
        $name = auth()->user()->name;
 
        return view('pages.user.userpurchase', compact('userdetails'))->with('totalPrice',$totalPrice)->with('name', $name);
    }
    public function indexdashboard(){
        $role = Auth::user()->role;

        if($role == '1'){
            return view('pages.admin.AdminDashboard');
        }else{
            return view('pages.user.userdashboard');
        }
    }

    public function indexuseruserschedule(){
        return view('pages.user.userschedule');
    }
    public function indexuserfare(){
        return view('pages.user.userfares');
    }
}
