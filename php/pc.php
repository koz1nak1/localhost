<?php
$pass = filter_var(trim($_POST['pass']), FILTER_SANITIZE_STRING);

$pass = md5($pass."hui1");

    $mysqli = new mysqli('localhost', 'sashko', 'Y8bmtKWhr4sX!', 'test_login');
    $mysql->query("INSERT INTO `users` (`pass`) VALUES ('$pass')");

    $mysql->close();

    header('Location: /');
    exit();

?>