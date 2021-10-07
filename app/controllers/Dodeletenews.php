<?php

class Dodeletenews extends Controller {
    public function index() {
        $data['title'] = 'Delete Berita';

		$url = rtrim($_GET['url'], '/');
		$urlclean = filter_var($url, FILTER_SANITIZE_URL);
		$urlget = explode('/', $urlclean);

        $this->model('NewsModel')->deleteNews($urlget[1]);

        //$_SESSION['alertnotif'] = "News Deleted!";

        header('Location: '.base_url);
        die();

    }
}