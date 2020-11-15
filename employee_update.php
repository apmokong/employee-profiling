<?php
include 'lib/includes/autoload.inc.php';

$employee = new employeeController;

$id = $employee->updateEmployee($_POST);
header("Location: profile.php?$id");
exit();
?>