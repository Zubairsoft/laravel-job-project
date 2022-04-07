<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class QualificationController extends Controller
{
    // Function use to display Qualification page
    function show()
    {
    return view('forent.qualafiction');
    }
    function showDashboard()
    {
    return view('dashboard.add.qualifiction');
    }
}
