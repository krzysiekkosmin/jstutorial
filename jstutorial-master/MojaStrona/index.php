<?php
include "dbconnect/dbconnect.php";

if (!isset($_SESSION['session'])){
    session_start();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Moja Strona</title>
</head>
<body>
    <div class="container">
        <div class="navigation">
            <ul>
                <li>
                    <a href="">
                        <span class="icon">
                            <div class="logo"><p>K</p>&<p>K</p></div>
                        </span>
                        
                    </a>
                </li>
                <li>
                    <a href="">
                        <span class="icon">
                            <ion-icon name="home-outline"></ion-icon>
                        </span>
                        <span class="title">Home</span>
                    </a>
                </li>
                <?php  if (!isset($_SESSION['session'])) {?>

                 <?php }else{ ?>   

                 <li class="logout">
                    <a href="">
                        <span class="icon">
                            <ion-icon name="log-out-outline"></ion-icon>
                        </span>
                        <span class="title">Wyloguj</span>
                    </a>
                </li>

                <?php } ?> 

            </ul>
        </div>
        <!-- Main -->
         <div class="main">
            
            <div class="topbar">
                <div class="toggle">
                    <ion-icon name="menu-outline"></ion-icon>
                </div>
            </div>

            
            <?php if (isset($_SESSION['session'])) { ?>
                           <div class="login-logout"> 
                                <p>Jesteś zalogowany jako <?php $_SESSION['session']?></p>
                                <button class="logout-btn">Wyloguj</button>
                            </div>
                    <?php }else{ ?>
                            <div class="login-logout"> 
                                <p>Nie jesteś zalogowany. </p>
                                <button class="login-btn">Zaloguj</button>
                            </div>
                        
            <?php } ?>

            <!-- Form Logowanie -->
            <div class="auth-modal <?= $active_form === 'register' ? 'show slide' : ($active_form === 'login' ? 'show' : ''); ?>">
                <button type="button" class="close-btn-modal"><ion-icon name="close-outline"></ion-icon></button>

                <div class="form-box login">
                    <h2>Login form</h2>
                    <form action="auth_process.php" method="POST">
                        <div class="input-box">
                            <input type="email" name="email" placeholder="Email" required>
                            <i class="bx bx-envelope"></i>
                        </div>
                        <div class="input-box">
                            <input type="password" name="password" placeholder="Passowrd" required>
                            <i class="bx bx-lock bx-flip-horizontal"></i>
                        </div>
                        <button type="submit" name="login_btn" class="btn">Login</button>
                        <p>Don't have an account? <a href="#" class="register-link">Register</a></p>
                    </form>
                </div>

                <div class="form-box register">
                    <h2>Register</h2>
                    <form action="auth_process.php" method="POST">
                        <div class="input-box">
                            <input type="text" name="name" placeholder="Name" required>
                            <i class="bx bx-user"></i>
                        </div>
                        <div class="input-box">
                            <input type="email" name="email" placeholder="Email" required>
                            <i class="bx bx-envelope"></i>
                        </div>
                        <div class="input-box">
                            <input type="password" name="password" placeholder="Password" required>
                            <i class="bx bx-envelope"></i>
                        </div>
                        <button type="submit" name="register_btn" class="btn">Register</button>
                        <p>Allready have an account? <a href="#" class="login-link">Login</a></p>
                    </form>
                </div>
            </div>
         </div>
    </div>

     <!-- ionicons -->
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>

    <!-- script -->
    <script src="js/script.js"></script>
</body>
</html>