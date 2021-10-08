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
            header('Location: '.base_url.'detail/'.$data['NID']);
            die();
        }

    }
}