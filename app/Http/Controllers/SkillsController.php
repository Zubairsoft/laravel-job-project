<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SkillsController extends Controller
{
    //
    function show()
    {
        return view('forent.skills');
    }

    function showDashboard()
    {
        return view('dashboard.add.skills');
    }
}
