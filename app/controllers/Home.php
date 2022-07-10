<?php
class Home extends Controller
{
    public function index()
    {
        $data['judul'] = 'index';
        $this->view('temp/header', $data);
        $this->view('home/index');
        $this->view('temp/footer');
    }
}
