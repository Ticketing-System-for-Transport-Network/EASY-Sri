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
        return view('pages.admin.report')->with($response);
    }
}