<?php

namespace Acme\Controllers;

class HomeController
{
    public function index()
    {
        return view('home', []);
    }
}
