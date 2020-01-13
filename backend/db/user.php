<?php
require_once 'connection.php';

$query = 'CREATE TABLE IF NOT EXISTS users (' .
		 'id INT PRIMARY KEY NOT NULL AUTO_INCREMENT,' .
		 'name VARCHAR(100) NOT NULL,' .
		 'email VARCHAR(100) NOT NULL,' .
		 'password VARCHAR(100) NOT NULL,' .
		 '2fa_secret_code VARCHAR(255) DEFAULT "");';
$result = mysqli_query($conn, $query);

//nenhum usuário cadastro, cria o default admin user
$query = 'SELECT 1 FROM users;';
$result = mysqli_query($conn, $query);
if($result) {
	if(mysqli_num_rows($result) == 0) {
		$password = hash('sha256', '123');

		$query = 'INSERT INTO users (name, email, password) VALUES ("admin", "admin@gmail.com", "' . $password . '");';
		$result = mysqli_query($conn, $query);
	}
}
?>