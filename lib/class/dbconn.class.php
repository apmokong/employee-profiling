<?php

/**
 * db connection
 */
class dbconn {
	private $host = "127.0.0.1";
	private $user = "root";
	private $pass = "";
	private $db = "employee_profiling";
	protected $pdo;

	protected function conn() {
		try {
			$det = "mysql:host=". $this->host .";dbname=". $this->db;
			$this->pdo = new PDO($det, $this->user, $this->pass);
			$this->pdo->setAttribute( PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);

			return $this->pdo;
		} catch (PDOException $e) {
			echo "Error: ". $e->getMessage();
		}
	}

	protected function lastInsertId() {
		return $this->pdo->lastInsertId();
	}

	public function closeConn() {
		$this->pdo = null;
	}
}
?>