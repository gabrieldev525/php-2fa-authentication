<?php
    if(isset($_COOKIE['logged'])) {
        header('location: index.php');
    }
?>

<!DOCTYPE html>
<html lang='en'>
<head>
    <meta charset='UTF-8'>
    <meta name='viewport' content='width=], initial-scale=1.0'>
    <meta http-equiv='X-UA-Compatible' content='ie=edge'>
    <title>2fa</title>

    <link rel='stylesheet' href='css/index.css' />
</head>
<body>
    <div class='content'>
        <p class='title'>Login</p>

        <form action='backend/login.php' method='post'>
            <input type='email' name='email' class='input' placeholder='email'>
            <input type='password' name='password' class='input' placeholder='senha'>
            <input type='submit' value='Logar'>
        </form>
    </div>
</body>
</html>