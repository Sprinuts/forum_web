<?php

namespace App\Controllers;

class Index extends BaseController
{
    public function index()
    {
        $forumsmodel = model('Forum_model');
        $data['forums'] = $forumsmodel->paginate(10);
        $data['pager'] = $forumsmodel->pager;

        return view('include/header')
            .view('include/navbar')
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
                'message',
                'subject'
            ]);

            $forummodel->insert($registerdata);


            return redirect()->to('/')->with('success', 'Forum created successfully!');
        }
        return view('include/header')
            .view('create')
            .view('include/footer');
    }

    public function forumview($id)
    {
        $forumsmodel = model('Forum_model');
        $data['forum'] = $forumsmodel->find($id);

        $replysmodel = model('Reply_model');
        $data['replys'] = $replysmodel->where('forumid', $id)->findAll();

        return view('include/header')
            .view('forumview', $data)
            .view('include/footer');
    }

    public function forumreply($id)
    {
        helper('form');
        if($this->request->getMethod() === 'POST') {
            $replymodel = model('Reply_model');

            $registerdata = $this->request->getPost([
                'username',
                'message'
            ]);

            $registerdata['forumid'] = $id;

            $replymodel->insert($registerdata);

            return redirect()->to('forumview/'.$id)->with('success', 'Reply created successfully!');
        }

        $data['id'] = $id;

        return view('include/header')
            .view('forumreply', $data)
            .view('include/footer');
    }

    public function downloadgame()
    {
        $downloadpath = model(('Game_model'));
        $game = $downloadpath->first();
        $data['games'] = $game['gamepath'];
        echo $data['games'];
        return view('include/header')
            .view('include/navbar')
            .view('downloadgame', $data)
            .view('include/footer');
    }
}
