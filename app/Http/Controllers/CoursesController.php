<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CoursesController extends Controller
{
    //
    function show()
    {
        return view('dashboard.add.courses');

    }
}
