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

		$url = rtrim($_GET['url'], '/');
		$urlclean = filter_var($url, FILTER_SANITIZE_URL);
		$urlget = explode('/', $urlclean);

		$data['nid'] = $this->model('NewsModel')->getNews($urlget[1]);

		if (isset($_SESSION['loggedin'])) $data['user'] = $this->model('UserModel')->getUser($_SESSION['loggedin']);

		$data['comments'] = $this->model("CommentModel")->getAllComments($urlget[1]);

		$this->view('templates/header', $data);
		$this->view('detail/index', $data);
		$this->view('templates/footer');
	}
}
