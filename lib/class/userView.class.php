<?php
/**
 * View for User
 */
class userView extends user {
	
	public function checkUser($username, $password) {
		$result = $this->loginUser($username, $password);
		
		if (!$result) {
			return false;
		} else {
			$_SESSION['id'] = $result['u_employeeId'];
			$_SESSION['type'] = $result['u_type'];
			$_SESSION['username'] = $username;
			return true;
		}
	} 
}
?>