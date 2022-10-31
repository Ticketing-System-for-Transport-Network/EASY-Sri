<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\UserRegandTopupRequestForm;
use App\Http\Requests\UserPaymentsRequestForm;
use App\Models\UserRegTopup;
use App\Models\Userpayment;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Input;


class UserPaymentsController extends ParentController
{
  public function storetopup(UserPaymentsRequestForm $request)
  {

    //  $topup=$request->amount;

    $UserpaymentObj = new Userpayment;


    $UserpaymentObj->userregid = auth()->user()->id;
    $tempid = auth()->user()->id;
    $tempesay_no = UserRegTopup::where('login_id', $tempid)->get('Easysrino');
    $str_numbers_only = preg_replace("/[^\d]/", "", $tempesay_no);
    $UserpaymentObj->Easysrino = $str_numbers_only;
    $UserpaymentObj->owner = $request->owner;
    $UserpaymentObj->cardnumber = $request->cardnumber;
    $UserpaymentObj->amount = $request->amount;

    // dd($UserpaymentObj);
    // $UserRegTopupObj->save();

    try {
      $data = $request->validated();
      $UserpaymentObj->save();
      return redirect()->back()->with('message', 'Top-UP Successfully');
    } catch (\Exception $ex) {
      return redirect()->back()->with('message', 'somthing went wrong' . $ex);
    }
  }

  
}