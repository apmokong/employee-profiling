<?php
session_start();
(empty($_SESSION)) ? header('Location: login.php') : '';
($_SESSION['type'] != 'admin') ? header('Location: profile.php') : '';
?>