<?php

$sName = "localhost";
$uName = "krzysiek";
$pass = "9ijnmko0";
$db_name = "task_management_db";

try{
    $conn = new PDO("mysql:host=$sName;dbname=$db_name", $uName, $pass);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}catch(PDOEXEption $e){
    echo "Connection failed: ". $e->getMessage();
    exit;
}

?>