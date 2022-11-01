<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FinanceController extends ParentController
{
    public function calculate()
    {
        return view('pages.admin.finance');
    }
}
