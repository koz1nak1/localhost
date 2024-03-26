<?php
$login = filter_var(trim($_POST['login']), FILTER_SANITIZE_STRING);
$pass = filter_var(trim($_POST['pass']), FILTER_SANITIZE_STRING);

$pass = md5($pass."hui1");

$mysqli = new mysqli('localhost', 'sashko', 'Password_1', 'test_login');

$stmt = $mysqli->prepare("SELECT * FROM users WHERE login = ? AND pass = ?");
$stmt->bind_param("ss", $login, $pass); // 'ss' indicates both parameters are strings
$stmt->execute();

$result = $stmt->get_result();
$user = $result->fetch_assoc();


if ($user === null) {
    echo "User not found";
    exit();
}

setcookie('user', $user['name'], time() +300, "/");

$mysqli->close();

header('Location: /');
exit();
?>