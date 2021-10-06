<?php

class Doaddcomment extends Controller {
    public function index() {
        $data['UID'] = strip_tags($_SESSION['loggedin']);
        $data['NID'] = strip_tags($_POST['NID']);
        $data['commentContent'] = strip_tags($_POST['comment']);

        if ($data['UID'] != NULL && $data['NID'] != NULL && $data['commentContent'] != NULL) {
            $data['title'] = "Do Add Comment";

            $this->model('CommentModel')->insertCommemt($data);

            header('Location: '.base_url.'detail/'. $data['NID']);
            die();
        }
        else {
            echo "Missing input";

            $_SESSION['alertnotif'] = "Missing input!";
            header('Location: '.base_url.'details/'.$data['NID']);
            die();
        }
    }
}