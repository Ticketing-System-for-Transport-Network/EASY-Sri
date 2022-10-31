<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ReportController extends ParentController
{
    public function generate()
    {
        return view('pages.admin.report');
    }
}
