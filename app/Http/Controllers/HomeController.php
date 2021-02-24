<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Information;
use App\Models\Testimonial;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $testi = Testimonial::whereStatus(true)->get();
        $information = Information::first();
        $category = Category::all();
        return view('index')->with([
            'category'=>$category,
            'info' => $information,
            'testi' => $testi
        ]);
    }
}
