<?php
    date_default_timezone_set('America/Fortaleza');

	// local database
    $host = '127.0.0.1';
    $user = 'root';
    $password = '';
    $db_name = '2fa';

	$conn = mysqli_connect($host, $user, $password) or die('Falha na conexão com o banco local');
    $query = 'CREATE DATABASE IF NOT EXISTS ' . $db_name;
    $result = mysqli_query($conn, $query);
    $conn = mysqli_connect($host, $user, $password, $db_name) or die ('Falha na conexão com o banco local');
?>