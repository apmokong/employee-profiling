<?php

/**
 * employee view
 */
class employeeView extends employee {
	
	public function viewAll() {
		return $result = $this->getAll();
	}

	public function viewEmployee($id) {
		return $this->getDetails($id);
	}
}
?>