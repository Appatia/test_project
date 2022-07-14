<?php

namespace App\Http\Controllers;

use App\Models\Home;

class HomeController extends Controller
{
    public function index()
    {
        $home = Home::find(2);
        dump($home->home);
        dump($home->stage);
        dd($home->flat);
    }
}
