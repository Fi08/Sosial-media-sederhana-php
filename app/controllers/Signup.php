<?php
class Signup extends Controller
{

    public function index()
    {
        $data['judul'] = 'Singup';
        $this->view('temp/header', $data);
        $this->view('singup/index');
        $this->view('temp/footer');
    }


    public function tambah()
    {

        $nama_gambar = $_FILES['gambar']['name'];
        $tmp_gambar = $_FILES['gambar']['tmp_name'];
        $size_gambar = $_FILES['gambar']['size'];
        $error_gambar = $_FILES['gambar']['error'];
        $ekstensi_boleh = ['jpg', 'jpeg', 'png'];

        $dapat_ekstensi = strtolower(end(explode('.', $nama_gambar)));

        if ($error_gambar !== 4) {
            if ($size_gambar < 4000000) {
                if (in_array($dapat_ekstensi, $ekstensi_boleh) === true) {

                    $namaFileBaru = uniqid();
                    $namaFileBaru .= '.';
                    $namaFileBaru .= $dapat_ekstensi;

                    move_uploaded_file($tmp_gambar, 'img/' . $namaFileBaru);
                    $tgl = Date('d-m-Y');
                    if ($this->model('Signup_model')->tambahUser($_POST, $namaFileBaru, $tgl) > 0) {
                        $sessionUser = $this->model('Login_model')->masukuser($_POST);
                        $_SESSION['id'] = $sessionUser['id'];
                        $_SESSION['email'] = $sessionUser['email'];
                        $_SESSION['nama'] = $sessionUser['nama'];
                        $_SESSION['img'] = $sessionUser['img'];

                        Flasher::setflash('success', 'Berhasil', 'Bergabung');

                        header('Location: ' . BASE . '/user');
                        exit();
                    } else {
                        Flasher::setflash('danger', 'Gagal', 'Bergabung');

                        header('Location: ' . BASE);
                        exit();
                    }
                } else {
                    echo "<script type='text/javascript'>alert('Yang anda Masukan Bukan Gambar');</script>";
                    Flasher::setflash('danger', 'Gagal', 'Yang anda Masukan Bukan Gambar');

                    header('Location: ' . BASE);
                }
            } else {
                echo "<script type='text/javascript'>alert('Ukuran Gambar Terlalu Besar');</script>";
                Flasher::setflash('danger', 'Gagal', 'Ukuran Gambar Terlalu Besar');

                header('Location: ' . BASE);
            }
        } else {
            echo "<script type='text/javascript'>alert('Masukan Gambar');</script>";
            Flasher::setflash('danger', 'Gagal', 'Masukan Gambar');

            header('Location: ' . BASE);
        }
    }
}
