<?php

namespace Modules\Senasoft\Http\Controllers;

use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Modules\Senasoft\Entities\Category;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     * @return Renderable
     */
    public function index()
    {
        $categories = Category::get();
        $base = [''=>$categories];
        return view('senasoft::category.home',$base);
    }
}
