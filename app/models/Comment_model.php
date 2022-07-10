<?php
class Comment_model
{
    private $table = 'comment';
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }


    public function tambahKomentar($data)
    {
        $this->db->query("INSERT INTO " . $this->table . " VALUES('',:post,:user,:isi)");
        $this->db->manualbind('post', $data['post']);
        $this->db->manualbind('user', $data['user']);
        $this->db->manualbind('isi', $data['comment']);
        $this->db->jalankan();
        $this->db->hitung();
    }
}
