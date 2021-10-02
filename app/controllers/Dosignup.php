<?php

class Dosignup extends Controller {
    public function index() {
        $data['firstname'] = strip_tags($_POST['firstname']);
        $data['lastname'] = strip_tags($_POST['lastname']);
        $data['email'] = strip_tags($_POST['email']);
        $data['password'] = strip_tags($_POST['password']);
        $data['birthdate'] = strip_tags($_POST['birthdate']);
        $data['gender'] = strip_tags($_POST['gender']);
        $data['photo'] = strip_tags($_POST['photo']);

        if ($data['firstname'] != NULL && $data['lastname'] != NULL && $data['email'] != NULL && $data['password'] != NULL && $data['birthdate'] != NULL && $data['gender'] != NULL && $data['photo'] != NULL) {
            $hash = hash('sha512', $password);

            $data['title'] = "Do Signup";

            //$this->model('UserModel')->insertUser($firstname, $lastname, $email, $hash, $birthdate, $gender, $photo);

            $_SESSION['alertnotif'] = "Account signed up!";
            
            /*
            $this->view('templates/header', $data);
            echo $email . " " . $password . " " . $hash;
            echo '<br>' . $firstname . $lastname;
            $this->view('templates/footer');
            */

            header('Location: '.base_url.'index');
            die();
        }
        else {
            echo "Hacker alert!";

            $_SESSION['alertnotif'] = "Missing input!";

            header('Location: '.base_url.'signup/index');
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