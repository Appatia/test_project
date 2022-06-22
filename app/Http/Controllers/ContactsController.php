<?php

namespace App\Http\Controllers;

use App\Models\Adress;

class ContactsController extends Controller
{
    public function index()
    {
        {
            return view('contacts');
        }
//        $adress = Adress::find(1);
//        dump($adress->title);
//        dump($adress->index);
//        dd($adress->flat);
    }
}
