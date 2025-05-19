<?php

namespace App\Controllers;

class Index extends BaseController
{
    public function index()
    {
        return view('include/header')
            .view('index')
            .view('include/footer');
    }

    public function create()
    {
        return view('include/header')
            .view('create')
            .view('include/footer');
    }

    public function test()
    {
        return view('include/header')
            .view('test')
            .view('include/footer');
    }
}
