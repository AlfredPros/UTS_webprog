<?php

class Addnews extends Controller
{
	public function index()
	{
		$data['title'] = 'Tambah Berita';

		$this->view('templates/header', $data);
		$this->view('addnews/index', $data);
		$this->view('templates/footer');
	}
}
