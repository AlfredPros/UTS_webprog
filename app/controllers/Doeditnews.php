<?php

class Doeditnews extends Controller {
    public function index() {
        $data['NID'] = strip_tags($_POST['NID']);
        $data['newsTitle'] = strip_tags($_POST['newsTitle']);
        $data['newsCategory'] = strip_tags($_POST['newsCategory']);
        $image_data = file_get_contents(addslashes($_FILES['newsThumbnail']['tmp_name']));
        $image = base64_encode($image_data);
        $imageSize = $_FILES['newsThumbnail']['size'];
        $data['newsThumbnail'] = $image;
        $data['newsWriter'] = strip_tags($_POST['newsWriter']);
        $data['newsContent'] = $_POST['newsContent'];

        if ($data['NID'] != NULL && $data['newsTitle'] != NULL && $data['newsCategory'] != NULL && $data['newsThumbnail'] != NULL && $data['newsWriter'] != NULL && $data['newsContent'] != NULL && $imageSize < maxFileSize) {
            $data['title'] = "Do addnews";

            $this->model('NewsModel')->updateNews($data);

            //$_SESSION['alertnotif'] = "News Edited!";

            header('Location: '.base_url);
            die();
        }
        else {
            
            if ($imageSize > maxFileSize) {
                $_SESSION['alertnotif'] = "File Size Too Big!";
            } else {
                $_SESSION['alertnotif'] = "Missing input!";
            }
            
            header('Location: '.base_url.'editnews/'.$data['NID']);
            die();
        }

    }
}