<?php

session_start();

unset($_SESSION['user']);

session_destroy();

header("LOCATION: index.php");

?>