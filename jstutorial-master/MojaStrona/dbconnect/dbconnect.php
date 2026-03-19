<?php
$host = "localhost";
$user = "krzysiek";
$password = "9ijnmko0";
$database = "panel_db";

$conn = new mysqli($host, $user, $password, $database);

if ($conn->connect_error) {
    die("Connection failed: ". $conn->connect_error);
}
?>