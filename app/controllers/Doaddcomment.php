<?php

class Doaddcomment extends Controller {
    public function index() {
        $data['UID'] = $_SESSION['loggedin'];
        $data['NID'] = $_POST['NID'];
        $data['commentContent'] = $_POST['comment'];

        if ($data['UID'] != NULL && $data['NID'] != NULL && $data['commentContent'] != NULL) {
            $data['title'] = "Do Add Comment";

            $this->model('CommentModel')->insertCommemt($data);

            $_SESSION['alertnotif'] = "Comment Added!";
            
            /*
            $this->view('templates/header', $data);
            echo $email . " " . $password . " " . $hash;
            echo '<br>' . $firstname . $lastname;
            $this->view('templates/footer');
            */

            header('Location: '.base_url.'detail/'. $data['NID']);
            die();
        }
        else {
            echo "Missing input";

            $_SESSION['alertnotif'] = "Missing input!";
            header('Location: '.base_url.'details/'.$data['NID']);
            die();
        }



        /*
        $data['password'] = strip_tags($_POST['password']);
        $data['conpassword'] = strip_tags($_POST['conpassword']);

        if ($data['password'] == $data['conpassword']) {
            $data['salt'] = strip_tags($_POST['salt']);

            $pass_salt = $data['password'] . $data['salt'];
            $hash = md5($pass_salt);

            $this->model('UserModel')->insertUser($username, $hash, $data['salt']);

            $this->view('templates/header', $data);
            echo $username . " " . $hash . " " . $pass_salt;
            $this->view('templates/footer');

            $_SESSION['successNotif'] = "User registered!";

            header('Location: '.base_url.'index');
            die();
        }
        else {
            $_SESSION['alertNotif'] = "Confirm password wrong!";

            header('Location: '.base_url.'register/index');
            die();
        }
        */
    }
}