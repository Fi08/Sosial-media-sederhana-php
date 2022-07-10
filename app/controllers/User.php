<?php
class User extends Controller
{

    public function index()
    {
        $data['judul'] = 'User';

        $data['user'] = $this->model('User_model')->dapatid($_SESSION['id']);
        $data['post'] = $this->model('Posts_model')->postme($_SESSION['id']);
        $this->view('temp/header', $data);

        $this->view('user/index', $data);
        $this->view('temp/footer');
    }

    // public function ubah()
    // {
    //     echo json_encode($this->model('User_model')->dapatid($_POST['id']));
    // }

    public function profiledit()
    {
        $data['judul'] = 'user edit';
        $data['user'] = $this->model('User_model')->dapatid($_POST['id']);

        $this->view('temp/header', $data);
        $this->view('user/profiledit', $data);
        $this->view('temp/footer');
    }

    public function ubah()
    {
        $gambarbaru = '';

        $namagambar = $_FILES['gambar']['name'];
        $errorgamabr = $_FILES['gambar']['error'];
        $tmp_gambar = $_FILES['gambar']['tmp_name'];
        $sizegambar = $_FILES['gambar']['size'];
        $eksensiboleh = ['jpg', 'png', 'jpeg'];
        $dapatekstensi = strtolower(end(explode('.', $namagambar)));

        //VALISADI
        if ($errorgamabr !== 4) {
            if ($sizegambar < 4000000) {
                if (in_array($dapatekstensi, $eksensiboleh)) {
                    $namagambarbaru = uniqid();
                    $namagambarbaru .= '.';
                    $namagambarbaru .= $dapatekstensi;

                    $gambarbaru = $namagambarbaru;

                    move_uploaded_file($tmp_gambar, 'img/' . $gambarbaru);
                } else {
                    echo "<script type='text/javascript'>alert('Yang anda Masukan Bukan Gambar');</script>";
                }
            } else {
                echo "<script type='text/javascript'>alert('Ukuran Gambar Terlalu Besar');</script>";
            }
        } else {
            $gambarbaru = $_POST['gambarlama'];
        }


        if ($this->model('User_model')->ubahdata($_POST, $gambarbaru) > 0) {
            Flasher::setflash('success', 'Berhasil', 'Diubah');
            header('Location: ' . BASE . '/user');
            exit;
        } else {
            Flasher::setflash('danger', 'Gagal', 'Diubah');
            header('Location: ' . BASE . '/user');
            exit;
        }
    }

    public function ubahposting()
    {
        echo json_encode($this->model('Posts_model')->dapatpost($_POST['id']));
    }
}
