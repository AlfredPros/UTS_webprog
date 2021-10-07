<?php

class Detail extends Controller
{
	public function index()
	{

		$url = rtrim($_GET['url'], '/');
		$urlclean = filter_var($url, FILTER_SANITIZE_URL);
		$urlget = explode('/', $urlclean);

		$data['nid'] = $this->model('NewsModel')->getNews($urlget[1]);

		if (isset($_SESSION['loggedin'])) $data['user'] = $this->model('UserModel')->getUser($_SESSION['loggedin']);

		$data['title'] = $data['nid'][1];
		$data['comments'] = $this->model("CommentModel")->getAllComments($urlget[1]);		

		$this->view('templates/header', $data);
		$this->view('detail/index', $data);
		$this->view('templates/footer');
	}
}
