<?php
class Posts_model
{
    private $table = 'post';
    private $Matertable = 'user';
    private $likes = 'likes';
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    public function tampilPost()
    {
        $this->db->query("SELECT post.id, content, nama, img, user_id FROM " . $this->table . "," . $this->Matertable . ' WHERE ' . $this->Matertable . '.id = ' . $this->table . '.user_id ORDER BY `post`.`tgl_update` DESC ');
        return $this->db->resultSet();
    }

    // public function singelpost()
    // {
    //     $this->db->query("SELECT post.id, content, nama, img, user_id FROM " . $this->table . "," . $this->Matertable . ' WHERE ' . $this->Matertable . '.id = ' . $this->table . '.user_id ORDER BY `post`.`tgl_update` DESC ');
    //     return $this->db->resultSet();
    // }

    public function tampilLike($data)
    {

        $this->db->query("SELECT * FROM likes WHERE id_user=:id_user");
        $this->db->manualbind('id_user', $data);
        return $this->db->resultSet();
    }

    public function postme($data)
    {
        $this->db->query("SELECT content, id , user_id FROM " . $this->table . ' WHERE user_id=:id ORDER BY `post`.`id` DESC');
        $this->db->manualbind('id', $data);
        return $this->db->resultSet();
    }

    public function tambahPost($data, $id)
    {
        $tgl = $this->db->tanggalsekarang();
        $this->db->query("INSERT INTO " . $this->table . " VALUES('',:content,:tgls,:tglu,:id)");
        $this->db->manualbind("content", $data['postingan']);
        $this->db->manualbind("tgls", $tgl);
        $this->db->manualbind("tglu", $tgl);
        $this->db->manualbind("id", $id);
        $this->db->jalankan();
        return $this->db->hitung();
    }

    public function hapuspost($id)
    {
        $this->db->query("DELETE FROM " . $this->table . ' WHERE id=:id');
        $this->db->manualbind("id", $id);
        $this->db->jalankan();

        $this->hilanglikes($id);


        return  $this->db->hitung();
    }

    public function hilanglikes($id)
    {

        $this->db->query("DELETE FROM " . $this->likes . ' WHERE id_post=:id');
        $this->db->manualbind("id", $id);
        $this->db->jalankan();
    }

    public function ubahposting($data)
    {
        $this->db->query("UPDATE " . $this->table . " set content=:content, tgl_update=:tglu WHERE id=:id");
        $this->db->manualbind("id", $data['id']);
        $this->db->manualbind("content", $data['postingan']);
        $this->db->manualbind("tglu", $this->db->tanggalsekarang());
        $this->db->jalankan();
        return $this->db->hitung();
    }

    public function dapatpost($id)
    {
        $this->db->query('SELECT * FROM ' . $this->table . ' WHERE id=:id');
        $this->db->manualbind('id', $id);
        $this->db->jalankan();
        return $this->db->single();
    }

    public function tambahlike($data)
    {
        $id1 = (int)$data['id_user'];
        $id2 = (int)$data['id_post'];
        $d3 = ['d1' => $id1, 'd2' => $id2];


        $this->db->query('INSERT into ' . $this->likes . ' Values("", :id_user, :id_post)');
        $this->db->manualbind('id_user', $d3['d1']);
        $this->db->manualbind('id_post', $d3['d2']);
        $this->db->jalankan();
        return $this->db->hitung();
    }

    public function hapuslike($data)
    {
        $id1 = (int)$data['id_user'];
        $id2 = (int)$data['id_post'];
        $d3 = ['d1' => $id1, 'd2' => $id2];


        $this->db->query('DELETE from ' . $this->likes . ' WHERE id_user=:id_user AND id_post=:id_post');
        $this->db->manualbind('id_user', $d3['d1']);
        $this->db->manualbind('id_post', $d3['d2']);
        $this->db->jalankan();
        return $this->db->hitung();
    }

    public function tampilPostsingle($id)
    {
        $this->db->query("select comment.id_comment, comment.id_post,comment.id_user,comment.isi_commen,post.id,user.id, user.nama 
        from comment join post on comment.id_post = post.id join user on user.id = comment.id_user where comment.id_post =:id ORDER BY comment.id_comment DESC");
        $this->db->manualbind("id", $id);
        $this->db->jalankan();
        return $this->db->resultSet();
        //oke
    }
}
