<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProtofileController extends Controller
{
    //Fonction use to display protofile page
    function show()
    {
    return view('forent.protofile');
    }
}
