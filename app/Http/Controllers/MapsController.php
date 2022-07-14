<?php

namespace App\Http\Controllers;

use App\Models\Maps;

class MapsController extends Controller
{
    public function index()
    {
        $maps = Maps::find(1);
        dump($maps->title);
        dump($maps->google);
        dump($maps->yandex);
        dump($maps->edge);
        dd($maps->internet);
    }
}
