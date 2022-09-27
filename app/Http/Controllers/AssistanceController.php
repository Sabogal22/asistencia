<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class assistanceController extends Controller
{
    public function index(){
        return view('assistance.home');
    }
}
