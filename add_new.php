<?php
include 'lib/includes/autoload.inc.php';

$employee = new employeeController;
$user = new userController;

$createUser = (isset($_POST['create-user']) ? $_POST['create-user'] : '');
$username = (isset($_POST['username']) ? $_POST['username'] : '');
$password = (isset($_POST['password']) ? $_POST['password'] : '');
unset($_POST['create-user']);
unset($_POST['username']);
unset($_POST['password']);

$id = $employee->addNewEmployee($_POST);

if ($createUser) {
	// create user
	$newUser = $user->addNewUser($id, $username, $password);
}

header("Location: profile.php?$id");
exit();
?>