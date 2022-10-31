<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminDashboardController extends ParentController
{
    public function dashboardview()
    {
        return view('pages.admin.admindashboard');
    }
}
