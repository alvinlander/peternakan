<?php

namespace App\Http\Controllers;

use App\Models\Information;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index()
    {
        $information = Information::first();
        return view('contacts')->with([
            'info' => $information
        ]);
    }
}
