<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    // function used for display show table
    function show(){
        return view('dashboard.add.users');
    }
}
