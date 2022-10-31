<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\UserRegandTopupRequestForm;
use App\Http\Requests\UserUpdateRequestForm;
use App\Models\UserRegTopup;
use App\Models\Userpayment;
use Carbon\Carbon;
use Illuminate\Support\Facades\Input;

class UserRegandTopupController extends ParentController
{
  //Store new users Details.....
  public function storeuser(UserRegandTopupRequestForm $request)
  {
    //Create new object from UserRegTopup model
    $UserRegTopupObj = new UserRegTopup;


    //Generate New Easy Card Number to New Users
    $easyyear = Carbon::now()->format('Y');
    $easynic = $request->NIC;

    $Easysrino = $easyyear . '' . $easynic;

    $UserRegTopupObj->login_id = auth()->user()->id;
    $UserRegTopupObj->login_email = auth()->user()->email;
    $UserRegTopupObj->Easysrino = $Easysrino;
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
      return redirect()->back()->with('message', 'Easy-Sri Account Created Successfully');
    } catch (Exception $ex) {
      return redirect()->back()->with('message', 'somthing went wrong' . $ex);
    }
  }

  public function updateUser(UserUpdateRequestForm $request, $userregid){
    $UserRegTopupObj  = UserRegTopup::find($userregid);

    $UserRegTopupObj->Fname = $request->Fname;
    $UserRegTopupObj->Lname = $request->Lname;
    $UserRegTopupObj->Address = $request->Address;
    $UserRegTopupObj->MobNo = $request->MobNo;

    //  dd($UserRegTopupObj);
    // $UserRegTopupObj->save();
    try {
      $data = $request->validated();
      $UserRegTopupObj->save();
      return redirect()->back()->with('message', 'Easy-Sri Account Updated Successfully');
    } catch (Exception $ex) {
      return redirect()->back()->with('message', 'somthing went wrong' . $ex);
    }
  
}
}