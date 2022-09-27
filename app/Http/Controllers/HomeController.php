<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }

    public function point()
    {
        return view('point');
    }

    public function aprendices()
    {
        return view('aprendices');
    }

    public function asistencia()
    {
        return view('asistencia');
    }

    public function contact()
    {
        return view('contact');
    }

    public function course()
    {
        return view('course');
    }

    public function senasoft()
    {
        return view('senasoft');
    }
}
