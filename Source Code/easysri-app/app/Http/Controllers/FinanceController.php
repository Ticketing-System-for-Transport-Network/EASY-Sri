<?php

namespace App\Http\Controllers;

use App\Models\Finance;
use domain\Facades\FinanceViewFacade;
use Illuminate\Http\Request;

class FinanceController extends ParentController
{
    public function calculate()
    {
        $response['finances'] = FinanceViewFacade::all();
        $totalCharge = Finance::sum('charge');
        return view('pages.admin.finance',compact('totalCharge'))->with($response);
    }
}
