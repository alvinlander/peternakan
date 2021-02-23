<?php

namespace App\Http\Controllers;

use App\Models\Information;
use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function index()
    {
        $information = Information::first();
        return view('about')->with([
            'info'=>$information
        ]);
    }
}
