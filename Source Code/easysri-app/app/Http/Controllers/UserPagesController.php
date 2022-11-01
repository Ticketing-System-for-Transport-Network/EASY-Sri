<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\UserRegTopup;
use App\Models\Userpayment;
use App\Models\BusTimeTable;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
use domain\Facades\UserPagesFacade;
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

            return view('pages.admin.admindashboard');

        }else{
            return view('pages.user.userdashboard');
        }
    }

    public function indexuseruserschedule(){

        $response['timetable'] =BusTimeTable::all();
        return view('pages.user.userschedule')->with($response);
    }
    public function indexuserfare(){
        $lastfare=BusTimeTable::all()->last();//last bus fare per km
    //    dd($lastfare);
       return view('pages.user.userfares')->with('lastfare',$lastfare); 
    }
}
