<?php
class About extends Controller
{
    public function index()
    {
        $data['judul'] = 'about';
        $this->view('temp/header', $data);
        $this->view('about/index');
        $this->view('temp/footer');
    }
}
