<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class JobController extends Controller
{
    // function use to display jobs page
    function show()
    {
    return view('forent.jobs');
    }
}
