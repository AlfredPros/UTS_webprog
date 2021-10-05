<?php

class Detail extends Controller
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
		$data['title'] = 'Detail Berita';

		$some1 = rtrim($_GET['url'], '/');
		$cool = filter_var($some1, FILTER_SANITIZE_URL);
		$bro = explode('/', $cool);

		$data['nid'] = $this->model('NewsModel')->getNews($bro[1]);

	


		$this->view('templates/header', $data);
		$this->view('detail/index', $data);
		$this->view('templates/footer');
	}
}
