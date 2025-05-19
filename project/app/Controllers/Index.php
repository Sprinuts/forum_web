<?php

namespace App\Controllers;

class Index extends BaseController
{
    public function index()
    {
        $forummodel = model('Forum_model');
        $data = [
            'forums' => $forummodel->findAll()
        ];

        return view('include/header')
            .view('index', $data)
            .view('include/footer');
    }

    public function create()
    {
        helper('form');
        if($this->request->getMethod() === 'POST') {
            $forummodel = model('Forum_model');

            $registerdata = $this->request->getPost([
                'username',
                'message'
            ]);

            $forummodel->insert($registerdata);


            return redirect()->to('/')->with('success', 'User created successfully!');
        }
        return view('include/header')
            .view('create')
            .view('include/footer');
    }
}
