<?php

$conn = new mysqli('185.66.91.129','shasko', 'Password_1', 'test_login');

if ($conn->connect_error) {
    die("ERROR: Unable to connect: " . $conn->connect_error);
}

echo 'Connected to the database';

$conn->close();

?>