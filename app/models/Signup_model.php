<?php

class Signup_model
{

    private $table = 'user';
    private $dbh;


    public function __construct()
    {
        $this->dbh = new Database;
    }

    public function tambahUser($data, $namaGambar, $tgl)
    {
        $this->dbh->query('INSERT INTO ' . $this->table . ' VALUES("", :nama, :email,:tglu, :tgl, :pass, :gambar)');
        $this->dbh->manualbind('nama', $data['nama']);
        $this->dbh->manualbind('email', $data['email']);
        $this->dbh->manualbind('tglu', $tgl);
        $this->dbh->manualbind('tgl', $tgl);

        $this->dbh->manualbind('pass', $data['password']);
        $this->dbh->manualbind('gambar', $namaGambar);

        $this->dbh->jalankan();

        return $this->dbh->hitung();
    }
}
