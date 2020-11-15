<?php
/**
 * employee controller
 */
class employeeController extends employee {

	public function addNewEmployee($arr) {
		$arr = array_values($arr);

		return $this->insertNew($arr);
	}

	public function updateEmployee($arr) {
		$id = $arr['emp_id'];
		unset($arr['emp_id']);
		$arr = array_values($arr);

		return $this->updateDetails($id, $arr);
	}
}
?>