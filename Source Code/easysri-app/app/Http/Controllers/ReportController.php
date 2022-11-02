<?php

namespace App\Http\Controllers;

use App\Models\Finance;
use domain\Facades\FinanceViewFacade;
use Illuminate\Http\Request;

class ReportController extends ParentController
{
    public function generate()
    {
        $response['finances'] = FinanceViewFacade::all();
        $totalCharge = Finance::sum('charge');
        return view('pages.admin.report',compact('totalCharge'))->with($response);
    }
}