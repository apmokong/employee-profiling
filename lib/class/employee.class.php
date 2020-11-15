<?php

/**
 * Employee class
 */
class employee extends dbconn {
	
	protected function getAll() {
		$emps = $this->conn()->query("SELECT e_id, e_firstname, e_lastname, e_title FROM employee");
		$result = $emps->fetchAll();

		$this->closeConn();
		return $result;
	}

	protected function getDetails($id) {
		$emp = $this->conn()->prepare("SELECT * FROM employee WHERE e_id = ?");
		$emp->execute([$id]);
		$result = $emp->fetch();

		$this->closeConn();
		return $result;
	}

	//requires array data
	protected function insertNew($arr) {
		$sql = "INSERT INTO employee (e_firstname, e_lastname, e_title, e_reportsTo, e_birthdate, e_hiredate, e_address, e_city, e_state, e_country, e_postal, e_phone, e_fax, e_email) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";
		$insert = $this->conn()->prepare($sql);
		$insert->execute($arr);

		$result = $this->lastInsertId();
		$this->closeConn();
		return $result;
	}

	protected function updateDetails($id, $arr) {
		array_push($arr,$id);

		$sql = "UPDATE employee SET e_firstname = ?, e_lastname = ?, e_title = ?, e_reportsTo = ?, e_birthdate = ?, e_hiredate = ?, e_address = ?, e_city = ?, e_state = ?, e_country = ?, e_postal = ?, e_phone = ?, e_fax = ?, e_email = ? WHERE e_id = ?";

		$update = $this->conn()->prepare($sql);
		$update->execute($arr);

		$this->closeConn();
		return count($id);
	}
}
?>