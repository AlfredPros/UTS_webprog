<?php

class Addnews extends Controller
{
	public function index()
	{
		$data['title'] = 'Add News';

		$this->view('templates/header', $data);
		$this->view('addnews/index', $data);
		$this->view('templates/footer');
	}
}
