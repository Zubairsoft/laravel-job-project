<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutController extends Controller
{
    // function use to display about page
    function show()
    {
        return view('forent.about');
    }
    function showDashboard()
    {
        return view('dashboard.add.about');
    }
}
