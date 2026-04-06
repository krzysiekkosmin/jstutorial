<?php

session_start();
if (!isset($_SESSION['email'])) {
    header("LOCATION: index.php");
    exit();
}

$errors = [
    'login' => $_SESSION['login_error'] ?? '',
    'register' => $_SESSION['register_error'] ?? ''
];
$activeForm = $_SESSION['active_form'] ?? 'login';


function showError($error) {
    return !empty($error) ? "<p class='error-message'>$error</p>" : '';
}

function isActiveForm($formName, $activeForm) {
    return $formName === $activeForm ? 'active' : '';
}

include 'config.php';
$query = mysqli_query($conn, "SELECT * FROM users");

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

            <div class="add_user">
                <p><a href="#" onclick="showForm('register-form')">Dodaj użytkownika</a></p>
             </div>
            <div class="form-box <?= isActiveForm('register', $activeForm); ?>" id="register-form">
                <form action="login_register.php" method="post">
                    <?= showError($errors['register']); ?>
                    <input type="text" name="name" placeholder="Name" required>
                    <input type="email" name="email" placeholder="Email" required>
                    <input type="tel" name="phone" placeholder="+48123456789" required>
                    <input type="password" name="password" placeholder="Password" required>
                    <select name="role" id="" required>
                        <option value="">-- Select Role --</option>
                        <option value="user">User</option>
                        <option value="admin">Admin</option>
                    </select>
                    <button type="submit" name="register">Utwórz</button>
                    <button class="btn-cancel" type="submit" name="cancel" onclick="document.location.href='users-management.php'">Zrezygnuj</button>
                </form>
            </div>
           

            <table class="users-table">
                <tr>
                    <th>L.P.</th>
                    <th>Imie i Nazwisko</th>
                    <th>Email</th>
                    <th>Telefon</th>
                    <th>Konto</th>
                    <th>Akcja</th>
                </tr>

                <?php
                $no = 1;
                while ($user = mysqli_fetch_assoc($query)) : ?>
                <tbody class="tbody">
                    <tr>
                        <td><?= $no++ ?></td>
                        <td><a class="table-a" href="admin_edit.php?id=<?= $user['id'] ?>" id="aselect"><?= $user['name'] ?></a></td>
                        <td><a class="table-a" href="admin_edit.php?id=<?= $user['id'] ?>" id="aselect"><?= $user['email'] ?></a></td>
                        <td><a class="table-a" href="admin_edit.php?id=<?= $user['id'] ?>" id="aselect"><?= $user['phonenumber'] ?></a></td>
                        <td><a class="table-a" href="admin_edit.php?id=<?= $user['id'] ?>" id="aselect"><?= $user['role'] ?></a></td>
                        <td><a class="table-d" href="login_register.php?id=<?= $user['id'] ?>" class="btn-delete" onclick="return confirm('Napewno chcesz usunąć użytkownika?')">Delete</a></td>
                    </tr>
                </tbody>
                <?php endwhile; ?>
            </table>
        </div>

    </div>
    
    <script src="script.js"></script>
</body>
</html>