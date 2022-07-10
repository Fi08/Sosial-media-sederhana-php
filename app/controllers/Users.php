<?php
class Users extends Controller
{
    public function index()
    {
        $data['judul'] = 'Users';
        $data['users'] = $this->model('User_model')->users();
        $this->view('temp/header', $data);
        $this->view('users/index', $data);
        $this->view('temp/footer');
    }

    public function pengguna($id)
    {
        $data['judul'] = 'Users';
        $data['users'] = $this->model('User_model')->dapatid($id);
        $data['posts'] = $this->model('Posts_model')->postme($id);
        $data['likes']  = $this->model('Posts_model')->tampilLike($_SESSION['id']);
        $this->view('temp/header', $data);
        $this->view('users/pengguna', $data);
        $this->view('temp/footer');
    }
}
