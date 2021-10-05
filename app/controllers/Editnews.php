<?php

class Editnews extends Controller
{
	public function __construct()
	{
		// if (!isset($_SESSION['session_login']) && $_SESSION['session_login'] != 'sudah_login') {
		// 	echo 'Login Tidak ditemukan. danger';
		// 	header('location: ' . base_url . '/login');
		// 	exit;
		// }
	}
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
