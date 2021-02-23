<?php

namespace App\Http\Controllers;

use App\Models\Gallery;
use App\Models\Information;
use Illuminate\Http\Request;

class GalleryController extends Controller
{
    public function index()
    {
        $information = Information::first();
        $gallery = Gallery::all();
        return view('gallery')->with([
            'info' => $information,
            'gallery' => $gallery
        ]);
    }
}
