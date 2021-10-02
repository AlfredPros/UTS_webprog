<?php

class Editnews extends Controller
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
		$data['title'] = 'Edit Berita';

		$this->view('templates/header', $data);
		$this->view('editnews/index', $data);
		$this->view('templates/footer');
	}
}
