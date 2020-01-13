<?php
    require_once 'db/connection.php';
    require_once 'db/user.php';

    session_start();

    $email = $_POST['email'] ?? null;
    $password = $_POST['password'] ?? null;

    if(!$email || !$password) {
        header('location: ../login.php');
    } else {
        $password = hash('sha256', $password);

		$query = 'SELECT * FROM users WHERE email="' . $email . '" AND password="' . $password . '";';
        $result = mysqli_query($conn, $query);

        if($result) {
            if(mysqli_num_rows($result) > 0) {
				$row = mysqli_fetch_assoc($result);

				$_COOKIE['logged'] = '1';
				setcookie('logged', '1', time() + (10 * 365 * 24 * 60 * 60), '/');

				$_SESSION['id'] = $row['id'];
                $_SESSION['name'] = $row['name'];

                header('location: ../auth.php');
			} else {
				header('location: ../login.php');
			}
        } else {
			header('location: ../login.php');
		}
    }
?>