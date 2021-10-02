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
		function randString($length = 7) {
			$characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
			$charactersLength = strlen($characters);
			$randomString = '';
			while(!preg_match('~[0-9]+~', $randomString)) {
				$randomString = '';
				for ($i = 0; $i < $length; $i++) {
					$randomString .= $characters[rand(0, $charactersLength - 1)];
				}
			};
			return $randomString;
		}

		$data['title'] = 'Login';
		$data['captcha'] = randString();

		$this->view('templates/header', $data);
		$this->view('login/index', $data);
		$this->view('templates/footer');
	}
}
