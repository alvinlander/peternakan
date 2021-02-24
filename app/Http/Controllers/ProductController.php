<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Goat;
use App\Models\Information;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        $information = Information::first();
        $category = Category::with('goats')->get();
        $goats = Goat::paginate(9);
        // dd($goats);
        return view('shop_catalog')->with([
            'info'=>$information,
            'category'=>$category,
            'goats' => $goats
        ]);
    }
    public function show($slug)
    {
        $information = Information::first();
        $category = Category::with('goats')->get();
        $searchBySlug = Category::whereSlug($slug)->first();
        $goats = Goat::where('category_id',$searchBySlug->id)->paginate(9);
        return view('shop_catalog')->with([
            'info'=>$information,
            'category'=>$category,
            'goats' => $goats
        ]);
    }
}
