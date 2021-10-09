<?php

class Database
{
	private $host = DB_HOST;
	private $user = DB_USER;
	private $pass = DB_PASS;
	private $dbnm = DB_NAME;

	public $db;

	public function __construct()
	{
		$dsn = 'mysql:host=' . $this->host . ';dbname=' . $this->dbnm;

		$option = [
			PDO::ATTR_PERSISTENT => true,
			PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
		];

		try {
			$this->db = new PDO($dsn, $this->user, $this->pass, $option);
			$query = $this->db->prepare("SET time_zone = '+07:00';");
            $query->execute();
		} catch (PDOException $e) {
			die($e->getMessage());
		}
	}
}
