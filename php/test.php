<?php

$conn = new mysqli('localhost', 'sashko', 'Y8bmtKWhr4sX!', 'test_login');

if ($conn->connect_error) {
    die("ERROR: Unable to connect: " . $conn->connect_error);
}

echo 'Connected to the database';

$conn->close();

?>