<?php
class Login extends Controller
{
    public function index()
    {
        $data['judul'] = 'login';
        $this->view('temp/header', $data);
        $this->view('login/index');
        $this->view('temp/footer');
    }


    public function masuk()
    {
        $sessionUser = $this->model('Login_model')->masukuser($_POST);
        if ($sessionUser > 0) {
            Flasher::setflash('success', 'user', 'Berhasil Masuk');
            $_SESSION['id'] = $sessionUser['id'];
            $_SESSION['email'] = $sessionUser['email'];
            $_SESSION['nama'] = $sessionUser['nama'];
            $_SESSION['img'] = $sessionUser['img'];

            header('Location: ' . BASE . '/user');
            exit();
        } else {
            Flasher::setflash('danger', 'email atau password salah', ',Gagal Masuk!!');
            header('Location: ' . BASE . '/login');
            exit();
        }
    }
}
