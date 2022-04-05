<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SkillsController extends Controller
{
    //Function use to display skills page
    function show()
    {
        return view('forent.skills');
    }
}
