<?php
spl_autoload_register('autoLoader');

function autoLoader($classname){
	$dir = "lib/class/";
	$ext = ".class.php";
	$path = $dir . $classname . $ext;

	if (!file_exists($path)) {
		return false;
	}

	include_once $path;
}
?>