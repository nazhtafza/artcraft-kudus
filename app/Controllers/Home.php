<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index(): string
    {

        echo view('layouts/header');
        return view('index');
        echo view('layouts/footer');
    }
}
