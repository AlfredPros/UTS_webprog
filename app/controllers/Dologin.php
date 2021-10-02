<?php

class Dologin extends Controller {
    public function index() {
        $data['username'] = strip_tags($_POST['username']);
        $data['password'] = strip_tags($_POST['password']);
        $data['captcha'] = strip_tags($_POST['captcha']);
        $data['captchaInput'] = strip_tags($_POST['captchaInput']);

        if ($data['username'] != NULL && $data['password'] != NULL && $data['captcha'] != NULL && $data['captchaInput'] != NULL) {
            
            if ($data['captcha'] == $data['captchaInput']) {
                $hash = hash('sha512', $data['password']);

                $data['title'] = "Do Login";

                $alluser = $this->model('UserModel')->getAllUser();
                $isadmin = $this->model('UserModel')->isAdmin($data);

                //$_SESSION['loggedin'] = $alluser['UID'];
                $_SESSION['alertnotif'] = "Account logged in!";
                
                
                $this->view('templates/header', $data);
                echo $data['username'] . " " . $data['password'];
                echo '<br>' . $alluser . '<br>' . $isadmin;
                $this->view('templates/footer');
                

                //header('Location: '.base_url.'index');
                //die();
            }
            else {
                echo "Robot alert!";
    
                $_SESSION['alertnotif'] = "Recaptcha wrong!";
    
                header('Location: '.base_url.'login/index');
                die();
            }
        }
        else {
            echo "Hacker alert!";

            $_SESSION['alertnotif'] = "Missing input!";

            header('Location: '.base_url.'login/index');
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