<?php

namespace App\Controllers;

class FemaleController extends Controller
{
    public function renderFemalePage()
    {
        $this->sendPage('female');
    }
}
