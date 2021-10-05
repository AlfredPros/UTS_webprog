<?php

class Dolike extends Controller {
    public function index() {
        $url = rtrim($_GET['url'], '/');
		$urlclean = filter_var($url, FILTER_SANITIZE_URL);
		$urlget = explode('/', $urlclean);

        $data['UID'] = $urlget[1];
        $data['CID'] = $urlget[2];
        $data['totalLikes'] = $urlget[3];
        $data['NID'] = $urlget[4];


        if ($data['UID'] != NULL && $data['CID'] != NULL) {

            $data['title'] = "Do Like";

            $this->model('CommentModel')->activateLikeButton($data);

            header('Location: '.base_url.'detail/'.$data['NID']);
            die();
        }
        else {
            echo "Hacker alert!";

            header('Location: '.base_url.'detail/'.$data['NID']);
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