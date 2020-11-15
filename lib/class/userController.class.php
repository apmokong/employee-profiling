<?php
/**
 * Controller for user class
 */
class userController extends user {

	public function addNewUser($id, $user, $password) {
		$userArr = array();
		array_push($userArr, 'user');
		array_push($userArr, $id);
		array_push($userArr, $user);
		array_push($userArr, $password);

		return $this->createUser($userArr);
	}
}
?>