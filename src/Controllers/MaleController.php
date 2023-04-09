<?php

namespace App\Controllers;

class MaleController extends Controller
{
    public function renderMalePage()
    {
        $this->sendPage('male');
    }
}
