<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminsettingController extends Controller
{
    function index(){
        return view("adminsetting");
    }
}
