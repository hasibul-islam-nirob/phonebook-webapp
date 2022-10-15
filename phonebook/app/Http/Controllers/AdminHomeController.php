<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminHomeController extends Controller
{
    function indexPage(){
        return view('Pages.homeAdmin');
    }
}
