<?php

class Home extends Controller
{
	public function index()
	{
		$data['title'] = 'Halaman Home';

		if (isset($_GET['url'])) {
			$url = rtrim($_GET['url'], '/');
			$urlclean = filter_var($url, FILTER_SANITIZE_URL);
			$urlget = explode('/', $urlclean);
		}
	
		if (isset($urlget[0])) {
			$category = $urlget[0];
		} else {
			if (!isset($_POST['category'])) {
				$category = 'All';
			} else {
				$category = $_POST['category'];
			}
		}

		switch ($category) {
			case 'All':
				$data['allnews'] = $this->model('NewsModel')->getAllNews();
				break;
			
			default:
				$data['allnews'] = $this->model('NewsModel')->getNewsByCategory($category);
				break;
		}
		$data['category'] = $category;
		$this->view('templates/header', $data);
		$this->view('home/index', $data);
		$this->view('templates/footer');
	}
}
