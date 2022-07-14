<?php

namespace App\Http\Controllers;

use App\Models\Adress;

class MainController extends Controller
{
    public function index()
    {
        {
            return view('main');
        }
//        $adress = Adress::find(1);
//        dump($adress->title);
//        dump($adress->index);
//        dd($adress->flat);
    }
}
