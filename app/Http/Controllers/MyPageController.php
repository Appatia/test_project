<?php

namespace App\Http\Controllers;

use App\Models\MyPage;

class MyPageController extends Controller
{
    public function index()
    {
        $my_page = MyPage::find(1);
        dump($my_page->title);
        dump($my_page->link);
        dump($my_page->port);
        dump($my_page->IP);
        dd($my_page->host);
    }
}
