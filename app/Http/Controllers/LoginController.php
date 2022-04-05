<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    //Function use to display login page
    function show()
    {
    return view('forent.login');
    }
}
