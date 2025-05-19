<?php

namespace App\Controllers;

class Admin extends BaseController
{
    public function login()
    {
        helper('form');

        if($this->request->getMethod() === 'POST') {
            $usermodel = model('Admin_model');

            $registerdata = $this->request->getPost([
                'username',
                'password'
            ]);

            $user  = $usermodel->where('username', $registerdata['username'])
                ->where('password', $registerdata['password'])
                ->first();

            if(!$user){
                session()->setFlashdata('error', 'Username and/or password in invalid.');
            } else{
                return redirect()->to('adminforum');
            }
        }

        return view('include/header')
            .view('adminlogin')
            .view('include/footer');
    }

    public function forum()
    {
        $forummodel = model('Forum_model');
        $data = [
            'forums' => $forummodel->findAll()
        ];

        return view('include/header')
            .view('adminforum', $data)
            .view('include/footer');
    }
}
