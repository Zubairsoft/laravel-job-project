<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends Controller
{
    // Function use to display contact page
      function show()
      {
        return view('forent.contact');
      }
      function showDashboard(){
        return view('dashboard.add.contact');
      }
}
