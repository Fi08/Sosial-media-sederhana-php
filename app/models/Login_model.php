<?php
class Login_model
{
    private $table = 'user';
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }


    public function masukuser($data)
    {

        $this->db->query('SELECT * FROM ' . $this->table . ' WHERE email= :email AND pass= :pass');
        $this->db->manualbind('email', $data['email']);
        $this->db->manualbind('pass', $data['password']);
        $this->db->jalankan();
        return $this->db->single();
    }
}
