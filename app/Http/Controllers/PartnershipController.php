<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PartnershipController extends Controller
{
    //function use to display partnership page

    function show()
    {
    return view('forent.partner');
    }

    function showDashboard()
    {
    return view('dashboard.add.partner');
    }

}
