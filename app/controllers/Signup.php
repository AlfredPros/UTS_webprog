<?php

class Signup extends Controller
{
	public function index()
	{
		$data['title'] = 'Sign Up';

		$this->view('templates/header', $data);
		$this->view('signup/index', $data);
		$this->view('templates/footer');
	}
}
