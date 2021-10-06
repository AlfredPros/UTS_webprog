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
        $imageSize = $_FILES['photo']['size'];
        $data['profilePhoto'] = $image;
        

        if ($data['firstName'] != NULL && $data['lastName'] != NULL && $data['username'] != NULL && $password != NULL && $data['birthDate'] != NULL && $data['gender'] != NULL && $data['profilePhoto'] != NULL && $imageSize < maxFileSize) {
            $data['password'] = hash('sha512', $password);

            $data['title'] = "Do Signup";

            $this->model('UserModel')->insertUser($data);

            $_SESSION['alertnotif'] = "Account signed up!";

            header('Location: '.base_url.'index');
            die();
        }
        else {
            echo "Something wrong alert!";
            if ($imageSize > maxFileSize) {
                $_SESSION['alertnotif'] = "File Size Too Big!";
            } else {
                $_SESSION['alertnotif'] = "Missing input!";
            }

            header('Location: '.base_url.'signup/index');
            die();
        }
    }
}