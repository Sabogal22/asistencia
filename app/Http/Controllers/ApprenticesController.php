<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ApprenticesController extends Controller
{
    public function index(){
        return view('apprentices.home');
    }
}
