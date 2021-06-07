<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home()
    {
        if (auth()->check()) {
            if (auth()->user()->role == "admin") {
                return redirect()->route('admin.dashboard');
            } else {

            }

        } else {
            return redirect()->route('login');
        }

    }
}
