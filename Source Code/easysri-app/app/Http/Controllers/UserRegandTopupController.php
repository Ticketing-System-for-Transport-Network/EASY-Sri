<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\UserRegandTopupRequestForm;
use App\Models\UserRegTopup;
use Carbon\Carbon;
use Illuminate\Support\Facades\Input;

class UserRegandTopupController extends Controller
{
    //Store new users Details.....
    public function storeuser(UserRegandTopupRequestForm $request){
        //Create new object from UserRegTopup model
        $UserRegTopupObj = new UserRegTopup;


        //Generate New Easy Card Number to New Users
        $easyyear = Carbon::now()->format('Y');
        $easynic= $request->NIC;
       
        $Easysrino = $easyyear.''. $easynic;


        $UserRegTopupObj->Easysrino = $Easysrino ;
        $UserRegTopupObj->Fname = $request->Fname;
        $UserRegTopupObj->Lname = $request->Lname;
        $UserRegTopupObj->NIC = $request->NIC;
        $UserRegTopupObj->Address = $request->Address;
        $UserRegTopupObj->City = $request->City;
        $UserRegTopupObj->Zipcode = $request->Zipcode;
        $UserRegTopupObj->MobNo = $request->MobNo;
        $UserRegTopupObj->Initalpay = $request->Initalpay;

        //    dd($UserRegTopupObj);
        //   $UserRegTopupObj->save();
          try {
            $data = $request->validated();
            $UserRegTopupObj->save();
            return redirect()->back()->with('message','Easy-Sri Account Created Successfully');
          } catch (Exception $ex) {
            return redirect()->back()->with('message','somthing went wrong'.$ex);
          }


    }
}
