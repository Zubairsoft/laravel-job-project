<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    // function use to display home page
    function show(){
    return view('forent.index');
    }
}
