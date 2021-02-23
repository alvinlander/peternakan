<?php

namespace App\Http\Controllers;

use App\Models\Information;
use App\Models\Testimonial;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $testi = Testimonial::whereStatus(true)->get();
        $information = Information::first();

        return view('index')->with([
            'info' => $information,
            'testi' => $testi
        ]);
    }
}
