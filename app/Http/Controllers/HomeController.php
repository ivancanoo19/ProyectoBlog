<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function adminHome()
    {
        return view('admin_home');
    }

    public function userHome()
    {
        return view('user_home');
    }
}
