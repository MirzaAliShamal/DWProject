<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function dashboard()
    {
        return view('admin.dashboard', get_defined_vars());
    }

    public function configuration()
    {
        return view('admin.configuration', get_defined_vars());
    }
}
