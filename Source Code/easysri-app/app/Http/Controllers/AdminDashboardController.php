<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminDashboardController extends Controller
{
    public function dashboardview()
    {
        return view('pages.admin.admindashboard');
    }
}
