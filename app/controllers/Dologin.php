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

                $user = $this->model('UserModel')->login($data['username'], $data['password']);
                if ($user != false) { 
                    $isadmin = $this->model('UserModel')->isAdmin($user);

                    $_SESSION['loggedin'] = $user;
                    $_SESSION['admin'] = $isadmin;
                    //$_SESSION['alertnotif'] = "Account logged in!";

                    header('Location: '.base_url.'index');
                    die();
                }
                else {
                    echo "Wrong username/password!";
    
                    $_SESSION['alertnotif'] = "Wrong username or password!";
        
                    header('Location: '.base_url.'login/index');
                    die();
                }
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

    }
}