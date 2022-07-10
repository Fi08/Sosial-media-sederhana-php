<?php
class Posts extends Controller
{
    public function index()
    {
        $data['judul'] = 'index';
        $data['users'] = $this->model('Posts_model')->tampilPost();
        $data['likes']  = $this->model('Posts_model')->tampilLike($_SESSION['id']);


        $this->view('temp/header', $data);
        $this->view('posts/index', $data);
        $this->view('temp/footer');
    }

    public function tambah()
    {
        if ($this->model('Posts_model')->tambahPost($_POST, $_SESSION['id']) > 0) {
            Flasher::setflash('success', 'Berhasil', 'Diunggah');

            header('Location: ' . BASE . '/posts');
            exit();
        } else {
            Flasher::setflash('danger', 'Gagal', 'Diunggah');

            header('Location: ' . BASE . '/posts');
            exit();
        }
    }

    public function hapus($id)
    {
        if ($this->model('Posts_model')->hapuspost($id) > 0) {
            Flasher::setflash('success', 'Berhasil', 'Dihapus');

            header('Location: ' . BASE . '/user');
            exit();
        } else {
            Flasher::setflash('success', 'Gagal', 'Dihapus');

            header('Location: ' . BASE . '/user');
            exit();
        }
    }

    public function ubahpost()
    {
        if ($this->model('Posts_model')->ubahposting($_POST) > 0) {
            Flasher::setflash('success', 'Berhasil', 'Diubag');
            header('Location: ' . BASE . '/user');
            exit();
        } else {
            Flasher::setflash('danger', 'Gagal', 'Diubah');

            header('Location: ' . BASE . '/user');
            exit();
        }
    }

    public function like()
    {
        echo json_encode($this->model('Posts_model')->tambahlike($_POST));
        //  echo ('like');
    }

    public function dislike()
    {
        echo json_encode($this->model('Posts_model')->hapuslike($_POST));
    }

    public function singlepost($id)
    {
        $data['judul'] = "Single Post";
        $data['post'] = $this->model('Posts_model')->dapatpost($id);
        $dataDua['komen'] =  $this->model('Posts_model')->tampilPostsingle($id);
        $this->view('temp/header', $data);
        $this->view('posts/single', $data['post'], $dataDua['komen']);
        $this->view('temp/footer');
    }
}
