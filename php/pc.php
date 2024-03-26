<?php
$pass = filter_var(trim($_POST['pass']), FILTER_SANITIZE_STRING);

$pass = md5($pass."hui1");

    $mysql = new mysqli('localhost','root','','regitre');
    $mysql->query("INSERT INTO `users` (`pass`) VALUES ('$pass')");

    $mysql->close();

    header('Location: /');
    exit();

?>