<?php
// if (!isset($_SESSION) || session_id() == "" || session_status() === PHP_SESSION_NONE){
//     session_start();
// }
if (!isset($_SESSION)){
    session_start();
}
?>
<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" 
    href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.1/css/all.min.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" 
        integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" 
        crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <title>Document</title>
</head>
<body>
    <div class="sidebar">
        <div class="logo"></div>
        <ul class="menu">
            <li class="active">
                <a href="index.php">
                    <i class="fas fa-tachometer-alt"></i>
                    <span>Home</span>
                </a>
            </li>
            <?php if (isset($_SESSION['name'])){ ?>
            <div class="user">
                <span>Welcome <?= $_SESSION['name']?></span>
            </div>
            <li class="logout">
                <a href="logout.php">
                    <i class="fas fa-sign-out-alt"></i>
                    <span>Logout</span>
                </a>
            </li>
            <?php }else{ ?>
                <li>
                    <a href="register.php">
                        <span>Register</span>
                    </a>
                </li>
                <li>
                    <a href="login.php">
                        <span>Login</span>
                    </a>
                </li>
                
            <?php } ?>
        </ul>
    </div>
    <!-- <div class="topmenu">
        <div class="menubar">
            <a href="index.php">Home</a>
            <?php
            // if (isset($_SESSION['name'])){ ?>
                <div class="user">
                    <span>Welcome <?= $_SESSION['name']?></span><a href="logout.php">Logout</a>
                </div>
            <?php //}else{ ?>
            
            <a href="register.php">Register</a>
            <a href="login.php">Login</a>
            <?php //} ?>
        </div>

    </div> -->
