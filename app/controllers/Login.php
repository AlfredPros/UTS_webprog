<?php

class Login extends Controller
{
	public function index()
	{
		function randString($length = 7) {
			$characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
			$charactersLength = strlen($characters);
			do {
				$randomString = '';
				for ($i = 0; $i < $length; $i++) {
					$randomString .= $characters[rand(0, $charactersLength - 1)];
				}
			}
			while (!preg_match('~[0-9]+~', $randomString));
			return $randomString;
		}

		$data['title'] = 'Login';
		$data['captcha'] = randString();

		$this->view('templates/header', $data);
		$this->view('login/index', $data);
		$this->view('templates/footer');
	}
}
