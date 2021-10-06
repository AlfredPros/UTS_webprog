<?php

class Signup extends Controller
{
	public function index()
	{
		$data['title'] = 'Detail Berita';

		$this->view('templates/header', $data);
		$this->view('signup/index', $data);
		$this->view('templates/footer');
	}
}
