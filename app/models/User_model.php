<?php
class User_model
{
    private $table = 'user';
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    public function users()
    {
        $this->db->query('SELECT * FROM ' . $this->table);
        return $this->db->resultSet();
    }

    public function dapatid($id)
    {
        $this->db->query('SELECT * FROM ' . $this->table . ' WHERE id=:id');
        $this->db->manualbind('id', $id);
        return $this->db->single();
    }


    public function ubahdata($data, $gambar)
    {
        $this->db->query('UPDATE ' . $this->table . ' SET nama=:nama, email=:email, pass=:pass, img=:img, tgl_update=:tgl_update WHERE id=:id');
        $this->db->manualbind('nama', $data['nama']);
        $this->db->manualbind('email', $data['email']);
        $this->db->manualbind('pass', $data['password']);
        $this->db->manualbind('img', $gambar);
        $this->db->manualbind('tgl_update', $this->db->tanggalsekarang());
        $this->db->manualbind('id', $data['id']);

        $this->db->jalankan();
        return $this->db->hitung();
    }
}
