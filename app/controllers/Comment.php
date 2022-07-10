<?php
class Comment extends Controller
{
    public function addkomen()
    {
        if ($this->model('Comment_model')->tambahKomentar($_POST) > 0) {

            header("Location: " . BASE . "/posts/singlepost/" . $_POST['post']);
            exit();
        } else {

            header("Location: " . BASE . "/posts/singlepost/" . $_POST['post']);
            exit();
        }
    }
}
