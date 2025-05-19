<?php

namespace App\Controllers;

class Admin extends BaseController
{
    public function login()
    {
        if(session()->has('isLogged')){
                return redirect()->to('adminforum');
            }

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
                session()->set('isLogged', true);



                return redirect()->to('adminforum');
            }
        }

        return view('include/header')
            .view('adminlogin')
            .view('include/footer');
    }

    public function forum()
    {
        if(!session()->has('isLogged')){
            return redirect()->to('adminlogin');
        }

        $forumsmodel = model('Forum_model');
        $data['forums'] = $forumsmodel->paginate(10);
        $data['pager'] = $forumsmodel->pager;

        return view('include/header')
            .view('include/adminnavbar')
            .view('adminforum', $data)
            .view('include/footer');
    }

    public function delete($id)
    {
        if(!session()->has('isLogged')){
            return redirect()->to('adminlogin');
        }

        $forumsmodel = model('Forum_model');
        $forumsmodel->delete($id);

        $replyModel = model('Reply_model');
        $replyModel->where('forumid', $id)->delete();

        return redirect()->to('adminforum')->with('success', 'Forum deleted successfully!');
    }

    public function replydelete($id)
    {
        if(!session()->has('isLogged')){
            return redirect()->to('adminlogin');
        }

        $replyModel = model('Reply_model');
        $replyModel->delete($id);

        $forumsmodel = model('Forum_model');
        $data['forum'] = $forumsmodel->find($id);

        return redirect()->to('adminforumview/'.$id)->with('success', 'Reply deleted successfully!')->with('data', $data);
    }

    public function forumview($id)
    {
        if(!session()->has('isLogged')){
            return redirect()->to('adminlogin');
        }

        $forumsmodel = model('Forum_model');
        $data['forum'] = $forumsmodel->find($id);

        $replysmodel = model('Reply_model');
        $data['replys'] = $replysmodel->where('forumid', $id)->findAll();

        return view('include/header')
            .view('include/adminnavbar')
            .view('adminforumview', $data)
            .view('include/footer');
    }

    public function logout()
    {
        session()->destroy();
        return redirect()->to('adminlogin');
    }
}
