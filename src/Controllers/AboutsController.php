<?php

namespace App\Controllers;

class AboutsController extends Controller
{
    public function about()
    {
        $this->sendPage('abouts');
    }
}
