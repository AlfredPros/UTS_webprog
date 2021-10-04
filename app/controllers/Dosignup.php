<?php

class Dosignup extends Controller {
    public function index() {
        $data['firstName'] = strip_tags($_POST['firstname']);
        $data['lastName'] = strip_tags($_POST['lastname']);
        $data['username'] = strip_tags($_POST['email']);
        $password = strip_tags($_POST['password']);
        $data['birthDate'] = strip_tags($_POST['birthdate']);
        $data['gender'] = strip_tags($_POST['gender']);
        $image_data = file_get_contents(addslashes($_FILES['photo']['tmp_name']));
        $image = base64_encode($image_data);
        $data['profilePhoto'] = $image;
        

        if ($data['firstName'] != NULL && $data['lastName'] != NULL && $data['username'] != NULL && $password != NULL && $data['birthDate'] != NULL && $data['gender'] != NULL && $data['profilePhoto'] != NULL) {
            $data['password'] = hash('sha512', $password);

            $data['title'] = "Do Signup";

            $this->model('UserModel')->insertUser($data);

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