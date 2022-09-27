<?php

namespace Modules\Senasoft\Http\Controllers;

use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class SenasoftController extends Controller
{
    /**
     * Display a listing of the resource.
     * @return Renderable
     */
    public function index()
    {
        return view('senasoft::index');
    }

    public function developers()
    {
        return view('senasoft::developers');
    }
}
