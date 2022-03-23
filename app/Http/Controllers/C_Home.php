<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class C_Home extends Controller
{
    public function Viewlogin()
    {
        return view('login');
    }

    public function Viewregis()
    {
        return view('register');
    }

    public function Viewdashboard()
    {
        return view('dashboard');
    }
    public function Viewmyproject()
    {
        return view('myproject');
    }
    public function Viewtopworker()
    {
        return view('topworker');
    }
}
