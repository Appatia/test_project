<?php

namespace App\Http\Controllers;

use App\Models\Posts;

class PostsController extends Controller
{
    public function index()
    {
        {
            return view('posts');
        }
//        $adress = Adress::find(1);
//        dump($adress->title);
//        dump($adress->index);
//        dd($adress->flat);
    }
}
