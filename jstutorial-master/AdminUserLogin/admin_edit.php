<?php

session_start();
if (!isset($_SESSION['email'])) {
    header("LOCATION: index.php");
    exit();
}

include "config.php";
$id = $_GET['id'];
$query = mysqli_query($conn, "SELECT * FROM users WHERE id=$id");
$user = mysqli_fetch_assoc($query);

?>

<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit User</title>
    <link rel="stylesheet" href="admin_style.css">
</head>
<body>
    
    <div class="wrapper">
        <nav>
            <a href="#" class="logo">K<span style="font-size: 20px;">&</span>K</a>
            <ul>
            <li>
                <a class="nav-link" href="admin_page.php">Home</a>
            </li>
            <li>
                <a class="nav-link" href="users-management.php">Użytkownicy</a>
            </li>
            <li>
                <a class="nav-link" href="#">Link</a>
            </li>
            <li>
                <a class="nav-link" href="#">Link</a>
            </li>
            <li>
                <a class="nav-link" href="#">Link</a>
            </li>
            </ul>
            <p class="login-session"><?= $_SESSION['email']; ?>
                <br><a href="logout.php"><b>Wyloguj</b></a>
            </p>
        </nav>
    </div>

    <div class="site-title">
        <div class="toChange">
            <h3>Dane do zmiany:</h3>
            <div class="column1">
                <h4>Imię i nazwisko:</h4>
                <h4>Email:</h4> 
                <h4>Numer telefonu:</h4> 
            </div>
            <div class="column2">
                <h4><?= $user['name'] ?></h4>
                <h4><?= $user['email'] ?></h4>
                <h4><?= $user['phonenumber'] ?></h4>
            </div>
        </div>
            
        <div class="form-edit">
            <h3>Zmiana</h3>
            <form method="POST" action="login_register.php?id=<?= $id ?>">
                <input type="text" name="name" placeholder="<?= $user['name'] ?>" required> 
                <input type="email" name="email" placeholder="<?= $user['email'] ?>" required> 
                <input type="text" name="phone" placeholder="<?= $user['phonenumber'] ?>" required>
                <div class="btn-box">
                    <button type="submit" class="btn" name="update">Update</button>
                    <!-- <a href="users-management.php" class="btn">Cancel</a> -->
                    <button class="btn-cancel" type="submit" name="cancel" onclick="document.location.href='users-management.php'">Zrezygnuj</button>
                </div>
            </form>
        </div>
        </div>
</body>
</html>