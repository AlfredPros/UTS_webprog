<?php

class Home extends Controller
{
	public function index()
	{
		$data['title'] = 'Halaman Home';
		
		if (!isset($_POST['category'])) {
			$category = 'All';
		} else {
			$category = $_POST['category'];
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
