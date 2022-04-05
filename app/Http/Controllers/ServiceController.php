<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ServiceController extends Controller
{
    // Function use  to display service page
    function show()
    {
        return view('forent.service');
    }

}
