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
        echo view('layout/Topbaar');
        echo view('layout/Sideabar');
        echo view('about');
        echo view('layout/Footer');
    }
}
