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

    public function replydelete($id,$fid)
    {
        if(!session()->has('isLogged')){
            return redirect()->to('adminlogin');
        }

        $replyModel = model('Reply_model');
        $replyModel->delete($id);

        $forumsmodel = model('Forum_model');
        $data['forum'] = $forumsmodel->find($fid);

        return redirect()->to('adminforumview/'.$fid)->with('success', 'Reply deleted successfully!')->with('data', $data);
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

    public function updategame()
    {
        if(!session()->has('isLogged')){
            return redirect()->to('adminlogin');
        }

        if ($this->request->getMethod() === 'POST') {
            $gamesmodel = model('Game_model');

            $file = $this->request->getFile('gamefile');

            if ($file && $file->isValid() && !$file->hasMoved()) {
                $gameDir = ROOTPATH . 'public/gamefile';
                // Remove existing files in the gamefile directory
                if (is_dir($gameDir)) {
                    $files = glob($gameDir . '/*');
                    foreach ($files as $existingFile) {
                        if (is_file($existingFile)) {
                            unlink($existingFile);
                        }
                    }
                }
                $filename = $file->getClientName();
                $file->move($gameDir, $filename);
                $gamePath = 'public/gamefile/' . $filename;

            $gamesmodel->update(1, [
                'gamepath' => $gamePath
            ]);

            return redirect()->to('adminforum')->with('success', 'Game updated successfully!');
            } else {
            return redirect()->back()->with('error', 'File upload failed.');
            }
        }

        return view('include/header')
            .view('include/adminnavbar')
            .view('adminupdategame')
            .view('include/footer');
    }
}
