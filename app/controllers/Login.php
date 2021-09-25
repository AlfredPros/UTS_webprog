<?php

class Login extends Controller
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
		$data['title'] = 'Login';

		$this->view('templates/header', $data);
		$this->view('login/index', $data);
		$this->view('templates/footer');
	}
}
