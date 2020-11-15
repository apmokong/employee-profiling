<?php
/**
 * User Model
 */
class user extends dbconn {
	
	protected function createUser($array) {
		$sql = "INSERT INTO users (u_type ,u_employeeId, u_username, u_password) VALUES (?, ?, ?, ?)";
		$user = $this->conn()->prepare($sql);
		$user->execute($array);

		return true;
	}

	protected function loginUser($username, $password) {
		$sql = "SELECT u_employeeId, u_type FROM users WHERE u_username = ? AND u_password = ?";
		$login = $this->conn()->prepare($sql);
		$login->execute([$username, $password]);
		$result = $login->fetch();

		if (!empty($result)) {
			return $result;
		} else {
			return false;
		}
	}
}
?>