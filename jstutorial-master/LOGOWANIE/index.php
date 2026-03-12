<?php

session_start();

$name = $_SESSION['name'] ?? null;
$alerts = $_SESSION['alerts'] ?? [];
$active_form = $_SESSION['active_form'] ?? '';

session_unset();

if ($name !== null) $_SESSION['name'] = $name;

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Full Stack Website With Login & Registration</title>
    <!-- Basic Icons -->
    <link href="https://cdn.boxicons.com/3.0.8/fonts/basic/boxicons.min.css" rel="stylesheet">
    <!-- Filled Icons -->
    <link href="https://cdn.boxicons.com/3.0.8/fonts/filled/boxicons-filled.min.css" rel="stylesheet">
    <!-- Brand Icons -->
    <link href="https://cdn.boxicons.com/3.0.8/fonts/brands/boxicons-brands.min.css" rel="stylesheet">
</head>
<body>

    <header>
        <a href="#" class="logo">LOGO</a>

        <nav>
            <a href="">Home</a>
            <a href="">About</a>
            <a href="">Collection</a>
            <a href="">Contact</a>
        </nav>

        <div class="user-auth">
            <?php if (!empty($name)): ?><!-- jeśli logowanie w polu name jest wypełnione -->
            <div class="profile-box">
                <div class="avatar-circle"><?= strtoupper($name[0]); ?></div><!-- avatar z wielkiej pierwszej litery nazwy użytkownika pojawia się  -->
                <div class="dropdown"><!-- aktywne menu dropdown  -->
                    <a href="">My Account</a>
                    <a href="logout.php">Logout</a>
                </div>
                
            </div>
            <?php else: ?><!-- jeśli nie ma pola name-->
            <button type="button" class="login-btn-modal">Login</button>
            <?php endif; ?>
        </div>
    </header>

    <section>
        <h1>Cześć <?= $name ?? 'Nieznajomy' ?>!</h1>
    </section>

    <?php if (!empty($alerts)): ?>
    <div class="alert-box">
        <?php foreach ($alerts as $alert): ?>
        <div class="alert <?= $alert['type']; ?>">
            <i class='bx <?= $alert['type'] === 'success' ? 'bx-check-circle' : 'bx-x-circle'; ?>'></i>
            <span><?= $alert['message'];?></span>
        </div>
        <?php endforeach; ?>
    </div>
    <?php endif; ?>


    <div class="auth-modal <?= $active_form === 'register' ? 'show slide' : ($active_form === 'login' ? 'show' : ''); ?>">
        <button type="button" class="close-btn-modal"><i class="bx bx-x"></i></button>

        <div class="form-box login">
            <h2>Login</h2>
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
    
    <script src="script.js"></script>
</body>
</html>