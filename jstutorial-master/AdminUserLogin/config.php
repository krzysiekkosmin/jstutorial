<?php

$host = "localhost";
$user = "krzysiek";
$password = "9ijnmko0";
$database = "user_db";

$conn = new mysqli($host, $user, $password, $database);
mysqli_set_charset($conn, "utf8");

if ($conn->connect_error) {
    die("Connection failed: ". $conn->connect_error);
}

?>