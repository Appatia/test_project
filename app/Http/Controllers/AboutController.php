<?php

namespace App\Http\Controllers;

use App\Models\Adress;

class AboutController extends Controller
{
    public function index()
    {
       return view('about');
    }
}
