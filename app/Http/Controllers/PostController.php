<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{
    //
    function show(){
        return view("dashboard.add.post");
    }
}
