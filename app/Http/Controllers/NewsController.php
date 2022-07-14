<?php

namespace App\Http\Controllers;

use App\Models\News;

class NewsController extends Controller
{
    public function index()
    {
        $news = News::find(1);
        dump($news->title);
        dump($news->date);
        dump($news->author);
        dump($news->theme);
        dump($news->category);
        dd($news->article);
    }
}
