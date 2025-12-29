<?php

namespace App\Controllers;

class Pages extends BaseController
{
    public function index()
    {
        return view('Home');
    }
    public function about()
    {
        echo view('layout/Header');
        echo view('pages/about');
        echo view('layout/Footer');
    }
}
