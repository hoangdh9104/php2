<?php

namespace Hoang9104\Setup\Controllers\Client;


use Hoang9104\Setup\Commons\Controller;

class HomeController extends Controller
{
    public function index()
    {
        $name = 'Hoangdh9104';
        $this->renderViewClient('home', [
            'name' => $name,
        ]);
    }
}
