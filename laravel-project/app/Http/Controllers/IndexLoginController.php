<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IndexLoginController extends Controller
{
    function indexlogin(){
        return view('indexlogin');
    }
}