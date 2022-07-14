<?php

namespace App\Http\Controllers;

use App\Models\Phone;

class PhoneController extends Controller
{
    public function index()
    {
        $phone = Phone::find(1);
        dump($phone->title);
        dump($phone->code);
        dd($phone->number);
    }
}
