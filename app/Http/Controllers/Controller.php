<?php

namespace App\Http\Controllers;

use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    public function index()
    {
        $str = 'appatia';
        dump($str);
        echo    '12345';
    }
}
