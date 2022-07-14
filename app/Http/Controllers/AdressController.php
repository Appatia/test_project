<?php

namespace App\Http\Controllers;

use App\Models\Adress;

class AdressController extends Controller
{
    public function index()
    {
        $adress = Adress::find(1);
        dump($adress->title);
        dump($adress->index);
        dd($adress->flat);
    }
}
