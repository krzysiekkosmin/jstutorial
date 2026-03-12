<?php

session_start();
?>

<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php if (empty($_SESSION['user'])) : ?><!-- jeśli sesia jest pusta, to ma utworzyć pusty formularz -->
    <form action="login.php" method="post">
        <input type="text" name="login">
        <br>
        <input type="password" name="password">
        <br>
        <button type="submit">log in</button>
    </form>
    <?php else : ?>
        <p>Hi, <?=$_SESSION['user']?></p>
        <a href="logout.php">Logout</a>
    <?php endif; ?>    
</body>
</html>