<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DetailpageController extends Controller
{
    public function index()
    {
        return view('detail');
    }
    
}
