<?php

class Editnews extends Controller
{
	public function index()
	{
		$data['title'] = 'Edit Berita';

		$url = rtrim($_GET['url'], '/');
		$urlclean = filter_var($url, FILTER_SANITIZE_URL);
		$urlget = explode('/', $urlclean);

		$data['nid'] = $this->model('NewsModel')->getNews($urlget[1]);

		$this->view('templates/header', $data);
		$this->view('editnews/index', $data);
		$this->view('templates/footer');
	}
}
