<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class JobDetailsController extends Controller
{
    // Function use to display job detail page
    function show()
    {
        return view('job_details');
    }
}
