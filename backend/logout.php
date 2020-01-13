<?php
	unset($_COOKIE['logged']);
    setcookie('logged', null, -1, '/');
    unset($_SESSION['id']);
	unset($_SESSION['name']);

	header('location: ../index.php')
?>