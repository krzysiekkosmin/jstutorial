<?php

session_start();
if (!isset($_SESSION['email'])) {
    header("LOCATION: index.php");
    exit();
}

include 'config.php';
$query_user = mysqli_query($conn, "SELECT count(*) FROM `users` WHERE `role` = 'user'"); 
$query_admin = mysqli_query($conn, "SELECT COUNT(*) FROM `users` WHERE `role` = 'admin'");
?>


<!DOCTYPE html>
<html lang="pl">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="admin_style.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css">

    <!-- <link rel="stylesheet" href="style.css"> -->
    <title>Admin Page</title>
</head>
    
    <div class="container">
        
        <div class="wrapper">
            <nav>
                <a href="#" class="logo">K<span style="font-size: 20px;">&</span>K</a>
                <ul>
                <li>
                    <a href="admin_page.php">Home</a>
                </li>
                <li>
                    <a href="users-management.php">Użytkownicy</a>
                </li>
                <li>
                    <a href="#">Link</a>
                </li>
                <li>
                    <a href="#">Link</a>
                </li>
                <li>
                    <a href="#">Link</a>
                </li>
                </ul>
                <p class="login-session"><?= $_SESSION['email']; ?>
                    <br><a class="login-link" href="logout.php"><b>Wyloguj</b></a>
                </p>
            </nav>
        </div>

        <div class="site-title">
            <div class="number_of_users">
                <?php 
                $online_row = mysqli_fetch_row($query_user);
                $online_users = $online_row[0];

                $online_row_admin = mysqli_fetch_row($query_admin);
                $online_admin = $online_row_admin[0];
                ?> 

                <span class="count-users">
                    <p class="user-reg">Zarejestrowanych:</p>
                    <p class="user-count">użytkownicy: <?= $online_users; ?></p>
                    <p class="user-count">administratorzy: <?= $online_admin; ?></p>
                </span>

                <!-- <span class="count-admin">
                    <?= $online_admin; ?> - <?php if ($online_admin == 1): ?>administrator. <?php else: ?> administratorów. <?php endif ?>
                </span> -->
            
            </div>
        </div>

    </div>
    
    <script src="script.js"></script>
</body>
</html>